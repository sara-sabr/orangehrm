<?php

/**
 * WSConsumerTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class WSConsumerTable extends PluginWSConsumerTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object WSConsumerTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('WSConsumer');
    }
}