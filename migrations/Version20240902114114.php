<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240902114114 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE broadcast CHANGE link link VARCHAR(1000) DEFAULT NULL, CHANGE poster poster VARCHAR(255) DEFAULT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_IDENTIFIER_USERNAME ON participant (email)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE broadcast CHANGE link link VARCHAR(255) DEFAULT NULL, CHANGE poster poster VARCHAR(1000) DEFAULT NULL');
        $this->addSql('DROP INDEX UNIQ_IDENTIFIER_USERNAME ON participant');
    }
}
