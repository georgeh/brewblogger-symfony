<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration,
    Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your need!
 */
class Version20130303154242 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        $this->addSql('ALTER TABLE  `hop_addition` CHANGE  `use`  `added_to` VARCHAR(250)');

    }

    public function down(Schema $schema)
    {
        $this->addSql('ALTER TABLE  `hop_addition` CHANGE  `added_to` `use` VARCHAR(250)');

    }
}
