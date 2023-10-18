<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231018084645 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE candidate ADD password VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE competence CHANGE competence_name competence_name VARCHAR(100) NOT NULL');
        $this->addSql('ALTER TABLE enterprise ADD enterprise_email VARCHAR(255) DEFAULT NULL, ADD password VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE professionnal_experience RENAME INDEX idx_fdea4d92a97d1ac3 TO IDX_A65E6757A97D1AC3');
        $this->addSql('ALTER TABLE professionnal_experience RENAME INDEX idx_fdea4d9291bd8781 TO IDX_A65E675791BD8781');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE candidate DROP password');
        $this->addSql('ALTER TABLE competence CHANGE competence_name competence_name VARCHAR(100) DEFAULT NULL');
        $this->addSql('ALTER TABLE enterprise DROP enterprise_email, DROP password');
        $this->addSql('ALTER TABLE professionnal_experience RENAME INDEX idx_a65e6757a97d1ac3 TO IDX_FDEA4D92A97D1AC3');
        $this->addSql('ALTER TABLE professionnal_experience RENAME INDEX idx_a65e675791bd8781 TO IDX_FDEA4D9291BD8781');
    }
}
