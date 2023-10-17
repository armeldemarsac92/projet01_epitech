<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231012164114 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE candidate (id INT AUTO_INCREMENT NOT NULL, candidate_first_name VARCHAR(20) NOT NULL, candidate_last_name VARCHAR(40) NOT NULL, candidate_sex VARCHAR(10) NOT NULL, candidate_email VARCHAR(80) NOT NULL, candidate_phone_number VARCHAR(20) DEFAULT NULL, candidate_localisation VARCHAR(255) DEFAULT NULL, candidate_about LONGTEXT DEFAULT NULL, candidate_profile_picture VARCHAR(255) DEFAULT NULL, candidate_status VARCHAR(100) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE certification (id INT AUTO_INCREMENT NOT NULL, certification_name VARCHAR(100) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE competence (id INT AUTO_INCREMENT NOT NULL, competance_name VARCHAR(100) NOT NULL, competence_icon VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE contract_length (id INT AUTO_INCREMENT NOT NULL, contract_length VARCHAR(20) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE contract_type (id INT AUTO_INCREMENT NOT NULL, contract_type VARCHAR(25) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE degree (id INT AUTO_INCREMENT NOT NULL, candidate_id INT NOT NULL, degree_name VARCHAR(100) NOT NULL, degree_school VARCHAR(100) NOT NULL, degree_start_date DATE NOT NULL, degree_end_date DATE NOT NULL, INDEX IDX_A7A36D6391BD8781 (candidate_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE enterprise (id INT AUTO_INCREMENT NOT NULL, enterprise_name VARCHAR(80) NOT NULL, enterprise_field VARCHAR(255) NOT NULL, enterprise_about LONGTEXT DEFAULT NULL, enterprise_workers_count INT DEFAULT NULL, enterprise_creation_date DATE DEFAULT NULL, enterprise_localisation VARCHAR(255) NOT NULL, enterprise_desired_profiles LONGTEXT DEFAULT NULL, enterprise_average_age INT DEFAULT NULL, enterprise_profile_picture VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE has_applied (id INT AUTO_INCREMENT NOT NULL, candidate_id INT NOT NULL, offer_id INT NOT NULL, INDEX IDX_410F9F4D91BD8781 (candidate_id), INDEX IDX_410F9F4D53C674EE (offer_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE has_certification (id INT AUTO_INCREMENT NOT NULL, candidate_id INT NOT NULL, certification_id INT NOT NULL, INDEX IDX_CEC5117291BD8781 (candidate_id), INDEX IDX_CEC51172CB47068A (certification_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE has_contract (id INT AUTO_INCREMENT NOT NULL, contract_type_id INT NOT NULL, contract_length_id INT NOT NULL, INDEX IDX_F8E9D26DCD1DF15B (contract_type_id), INDEX IDX_F8E9D26D4C7A1DCC (contract_length_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE has_faved (id INT AUTO_INCREMENT NOT NULL, candidate_id INT NOT NULL, offer_id INT NOT NULL, INDEX IDX_AA6ADB6991BD8781 (candidate_id), INDEX IDX_AA6ADB6953C674EE (offer_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE has_hobby (id INT AUTO_INCREMENT NOT NULL, candidate_id INT NOT NULL, hobby_id INT NOT NULL, INDEX IDX_C2EDE38991BD8781 (candidate_id), INDEX IDX_C2EDE389322B2123 (hobby_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE hobby (id INT AUTO_INCREMENT NOT NULL, hobby_name VARCHAR(80) NOT NULL, hobby_about LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE job_offer (id INT AUTO_INCREMENT NOT NULL, contract_type_id INT NOT NULL, offer_enterprise_id INT NOT NULL, offer_title VARCHAR(150) NOT NULL, offer_publication_date DATE NOT NULL, offer_about LONGTEXT NOT NULL, offer_expected_work LONGTEXT NOT NULL, offer_annual_salary INT NOT NULL, offer_studies VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_288A3A4ECD1DF15B (contract_type_id), INDEX IDX_288A3A4EF52949C8 (offer_enterprise_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE language (id INT AUTO_INCREMENT NOT NULL, language_name VARCHAR(20) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE language_level (id INT AUTO_INCREMENT NOT NULL, language_level VARCHAR(80) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE professionnal_experience (id INT AUTO_INCREMENT NOT NULL, enterprise_id INT NOT NULL, candidate_id INT NOT NULL, experience_start_date DATE NOT NULL, experience_end_date DATE DEFAULT NULL, experience_job_title VARCHAR(100) NOT NULL, experience_description LONGTEXT NOT NULL, INDEX IDX_FDEA4D92A97D1AC3 (enterprise_id), INDEX IDX_FDEA4D9291BD8781 (candidate_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE required_competence (id INT AUTO_INCREMENT NOT NULL, job_offer_id INT NOT NULL, competence_id INT NOT NULL, INDEX IDX_8B39E953481D195 (job_offer_id), INDEX IDX_8B39E9515761DAB (competence_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE required_tool (id INT AUTO_INCREMENT NOT NULL, job_offer_id INT NOT NULL, tool_id INT NOT NULL, INDEX IDX_A54B61713481D195 (job_offer_id), INDEX IDX_A54B61718F7B22CC (tool_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE speaks_language (id INT AUTO_INCREMENT NOT NULL, candidate_id INT NOT NULL, language_id INT NOT NULL, language_level_id INT NOT NULL, INDEX IDX_F82F46C191BD8781 (candidate_id), INDEX IDX_F82F46C182F1BAF4 (language_id), INDEX IDX_F82F46C13313139D (language_level_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tool (id INT AUTO_INCREMENT NOT NULL, tool_name VARCHAR(80) NOT NULL, tool_icon VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE used_competence (id INT AUTO_INCREMENT NOT NULL, experience_id INT NOT NULL, competence_id INT NOT NULL, INDEX IDX_D096E68F46E90E27 (experience_id), INDEX IDX_D096E68F15761DAB (competence_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE used_tool (id INT AUTO_INCREMENT NOT NULL, experience_id INT NOT NULL, tool_id INT NOT NULL, INDEX IDX_8FFD939E46E90E27 (experience_id), INDEX IDX_8FFD939E8F7B22CC (tool_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE degree ADD CONSTRAINT FK_A7A36D6391BD8781 FOREIGN KEY (candidate_id) REFERENCES candidate (id)');
        $this->addSql('ALTER TABLE has_applied ADD CONSTRAINT FK_410F9F4D91BD8781 FOREIGN KEY (candidate_id) REFERENCES candidate (id)');
        $this->addSql('ALTER TABLE has_applied ADD CONSTRAINT FK_410F9F4D53C674EE FOREIGN KEY (offer_id) REFERENCES job_offer (id)');
        $this->addSql('ALTER TABLE has_certification ADD CONSTRAINT FK_CEC5117291BD8781 FOREIGN KEY (candidate_id) REFERENCES candidate (id)');
        $this->addSql('ALTER TABLE has_certification ADD CONSTRAINT FK_CEC51172CB47068A FOREIGN KEY (certification_id) REFERENCES certification (id)');
        $this->addSql('ALTER TABLE has_contract ADD CONSTRAINT FK_F8E9D26DCD1DF15B FOREIGN KEY (contract_type_id) REFERENCES contract_type (id)');
        $this->addSql('ALTER TABLE has_contract ADD CONSTRAINT FK_F8E9D26D4C7A1DCC FOREIGN KEY (contract_length_id) REFERENCES contract_length (id)');
        $this->addSql('ALTER TABLE has_faved ADD CONSTRAINT FK_AA6ADB6991BD8781 FOREIGN KEY (candidate_id) REFERENCES candidate (id)');
        $this->addSql('ALTER TABLE has_faved ADD CONSTRAINT FK_AA6ADB6953C674EE FOREIGN KEY (offer_id) REFERENCES job_offer (id)');
        $this->addSql('ALTER TABLE has_hobby ADD CONSTRAINT FK_C2EDE38991BD8781 FOREIGN KEY (candidate_id) REFERENCES candidate (id)');
        $this->addSql('ALTER TABLE has_hobby ADD CONSTRAINT FK_C2EDE389322B2123 FOREIGN KEY (hobby_id) REFERENCES hobby (id)');
        $this->addSql('ALTER TABLE job_offer ADD CONSTRAINT FK_288A3A4ECD1DF15B FOREIGN KEY (contract_type_id) REFERENCES has_contract (id)');
        $this->addSql('ALTER TABLE job_offer ADD CONSTRAINT FK_288A3A4EF52949C8 FOREIGN KEY (offer_enterprise_id) REFERENCES enterprise (id)');
        $this->addSql('ALTER TABLE professionnal_experience ADD CONSTRAINT FK_FDEA4D92A97D1AC3 FOREIGN KEY (enterprise_id) REFERENCES enterprise (id)');
        $this->addSql('ALTER TABLE professionnal_experience ADD CONSTRAINT FK_FDEA4D9291BD8781 FOREIGN KEY (candidate_id) REFERENCES candidate (id)');
        $this->addSql('ALTER TABLE required_competence ADD CONSTRAINT FK_8B39E953481D195 FOREIGN KEY (job_offer_id) REFERENCES job_offer (id)');
        $this->addSql('ALTER TABLE required_competence ADD CONSTRAINT FK_8B39E9515761DAB FOREIGN KEY (competence_id) REFERENCES competence (id)');
        $this->addSql('ALTER TABLE required_tool ADD CONSTRAINT FK_A54B61713481D195 FOREIGN KEY (job_offer_id) REFERENCES job_offer (id)');
        $this->addSql('ALTER TABLE required_tool ADD CONSTRAINT FK_A54B61718F7B22CC FOREIGN KEY (tool_id) REFERENCES tool (id)');
        $this->addSql('ALTER TABLE speaks_language ADD CONSTRAINT FK_F82F46C191BD8781 FOREIGN KEY (candidate_id) REFERENCES candidate (id)');
        $this->addSql('ALTER TABLE speaks_language ADD CONSTRAINT FK_F82F46C182F1BAF4 FOREIGN KEY (language_id) REFERENCES language (id)');
        $this->addSql('ALTER TABLE speaks_language ADD CONSTRAINT FK_F82F46C13313139D FOREIGN KEY (language_level_id) REFERENCES language_level (id)');
        $this->addSql('ALTER TABLE used_competence ADD CONSTRAINT FK_D096E68F46E90E27 FOREIGN KEY (experience_id) REFERENCES professionnal_experience (id)');
        $this->addSql('ALTER TABLE used_competence ADD CONSTRAINT FK_D096E68F15761DAB FOREIGN KEY (competence_id) REFERENCES competence (id)');
        $this->addSql('ALTER TABLE used_tool ADD CONSTRAINT FK_8FFD939E46E90E27 FOREIGN KEY (experience_id) REFERENCES professionnal_experience (id)');
        $this->addSql('ALTER TABLE used_tool ADD CONSTRAINT FK_8FFD939E8F7B22CC FOREIGN KEY (tool_id) REFERENCES tool (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE degree DROP FOREIGN KEY FK_A7A36D6391BD8781');
        $this->addSql('ALTER TABLE has_applied DROP FOREIGN KEY FK_410F9F4D91BD8781');
        $this->addSql('ALTER TABLE has_applied DROP FOREIGN KEY FK_410F9F4D53C674EE');
        $this->addSql('ALTER TABLE has_certification DROP FOREIGN KEY FK_CEC5117291BD8781');
        $this->addSql('ALTER TABLE has_certification DROP FOREIGN KEY FK_CEC51172CB47068A');
        $this->addSql('ALTER TABLE has_contract DROP FOREIGN KEY FK_F8E9D26DCD1DF15B');
        $this->addSql('ALTER TABLE has_contract DROP FOREIGN KEY FK_F8E9D26D4C7A1DCC');
        $this->addSql('ALTER TABLE has_faved DROP FOREIGN KEY FK_AA6ADB6991BD8781');
        $this->addSql('ALTER TABLE has_faved DROP FOREIGN KEY FK_AA6ADB6953C674EE');
        $this->addSql('ALTER TABLE has_hobby DROP FOREIGN KEY FK_C2EDE38991BD8781');
        $this->addSql('ALTER TABLE has_hobby DROP FOREIGN KEY FK_C2EDE389322B2123');
        $this->addSql('ALTER TABLE job_offer DROP FOREIGN KEY FK_288A3A4ECD1DF15B');
        $this->addSql('ALTER TABLE job_offer DROP FOREIGN KEY FK_288A3A4EF52949C8');
        $this->addSql('ALTER TABLE professionnal_experience DROP FOREIGN KEY FK_FDEA4D92A97D1AC3');
        $this->addSql('ALTER TABLE professionnal_experience DROP FOREIGN KEY FK_FDEA4D9291BD8781');
        $this->addSql('ALTER TABLE required_competence DROP FOREIGN KEY FK_8B39E953481D195');
        $this->addSql('ALTER TABLE required_competence DROP FOREIGN KEY FK_8B39E9515761DAB');
        $this->addSql('ALTER TABLE required_tool DROP FOREIGN KEY FK_A54B61713481D195');
        $this->addSql('ALTER TABLE required_tool DROP FOREIGN KEY FK_A54B61718F7B22CC');
        $this->addSql('ALTER TABLE speaks_language DROP FOREIGN KEY FK_F82F46C191BD8781');
        $this->addSql('ALTER TABLE speaks_language DROP FOREIGN KEY FK_F82F46C182F1BAF4');
        $this->addSql('ALTER TABLE speaks_language DROP FOREIGN KEY FK_F82F46C13313139D');
        $this->addSql('ALTER TABLE used_competence DROP FOREIGN KEY FK_D096E68F46E90E27');
        $this->addSql('ALTER TABLE used_competence DROP FOREIGN KEY FK_D096E68F15761DAB');
        $this->addSql('ALTER TABLE used_tool DROP FOREIGN KEY FK_8FFD939E46E90E27');
        $this->addSql('ALTER TABLE used_tool DROP FOREIGN KEY FK_8FFD939E8F7B22CC');
        $this->addSql('DROP TABLE candidate');
        $this->addSql('DROP TABLE certification');
        $this->addSql('DROP TABLE competence');
        $this->addSql('DROP TABLE contract_length');
        $this->addSql('DROP TABLE contract_type');
        $this->addSql('DROP TABLE degree');
        $this->addSql('DROP TABLE enterprise');
        $this->addSql('DROP TABLE has_applied');
        $this->addSql('DROP TABLE has_certification');
        $this->addSql('DROP TABLE has_contract');
        $this->addSql('DROP TABLE has_faved');
        $this->addSql('DROP TABLE has_hobby');
        $this->addSql('DROP TABLE hobby');
        $this->addSql('DROP TABLE job_offer');
        $this->addSql('DROP TABLE language');
        $this->addSql('DROP TABLE language_level');
        $this->addSql('DROP TABLE professionnal_experience');
        $this->addSql('DROP TABLE professionnal_experience');
        $this->addSql('DROP TABLE required_competence');
        $this->addSql('DROP TABLE required_tool');
        $this->addSql('DROP TABLE speaks_language');
        $this->addSql('DROP TABLE tool');
        $this->addSql('DROP TABLE used_competence');
        $this->addSql('DROP TABLE used_tool');
    }
}
