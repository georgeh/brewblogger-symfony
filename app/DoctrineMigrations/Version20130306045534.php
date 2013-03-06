<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration,
    Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your need!
 */
class Version20130306045534 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        $this->addSql('ALTER TABLE  `misc_addition` CHANGE  `use`  `used_for` VARCHAR(250)');

    }

    public function down(Schema $schema)
    {
        $this->addSql('ALTER TABLE  `misc_addition` CHANGE  `used_for` `use` VARCHAR(250)');

    }
}
