<?php

namespace MauticPlugin\HelloWorldBundle;

use Doctrine\DBAL\Schema\Schema;
use Mautic\PluginBundle\Entity\Plugin;
use Mautic\CoreBundle\Factory\MauticFactory;
use Mautic\PluginBundle\Bundle\PluginBundleBase;

class HelloWorldBundle extends PluginBundleBase {
    /**
     * Called by PluginController::reloadAction when adding a new plugin that's not already installed
     *
     * @param Plugin        $plugin
     * @param MauticFactory $factory
     * @param null          $metadata
     */

    static public function onPluginInstall(Plugin $plugin, MauticFactory $factory, $metadata = null)
    {
        if ($metadata !== null) {
            self::installPluginSchema($metadata, $factory);
        }

        // Do other install stuff
    }

    /**
    * Called by PluginController::reloadAction when the plugin version does not match what's installed
    *
    * @param Plugin        $plugin
    * @param MauticFactory $factory
    * @param null          $metadata
    * @param Schema        $installedSchema
    *
    * @throws \Exception
    */
    static public function onPluginUpdate(Plugin $plugin, MauticFactory $factory, $metadata = null, Schema $installedSchema = null)
    {
        $db             = $factory->getDatabase();
        $platform       = $db->getDatabasePlatform()->getName();
        $queries        = array();
        $fromVersion    = $plugin->getVersion();

        // Simple example
        switch ($fromVersion) {
            case '1.0':
                switch ($platform) {
                    case 'mysql':
                        $queries[] = 'ALTER TABLE ' . MAUTIC_TABLE_PREFIX . 'worlds CHANGE CHANGE description description LONGTEXT DEFAULT NULL';
                        break;

                    case 'postgresql':
                        $queries[] = 'ALTER TABLE ' . MAUTIC_TABLE_PREFIX . 'worlds ALTER description ALTER TYPE TEXT';
                        break;
                }

                break;
        }

        if (!empty($queries)) {

            $db->beginTransaction();
            try {
                foreach ($queries as $q) {
                    $db->query($q);
                }

                $db->commit();
            } catch (\Exception $e) {
                $db->rollback();

                throw $e;
            }
        }
    }
}