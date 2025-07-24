<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180112100425 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE mda (id INT AUTO_INCREMENT NOT NULL, mda_code INT NOT NULL, name VARCHAR(255) NOT NULL, email VARCHAR(100) DEFAULT NULL, address LONGTEXT DEFAULT NULL, phone VARCHAR(255) DEFAULT NULL, top_official_designation VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_846A7E0CE7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE mda_participant (id INT AUTO_INCREMENT NOT NULL, mda_code INT NOT NULL, first_name VARCHAR(255) NOT NULL, last_name VARCHAR(255) NOT NULL, email VARCHAR(100) NOT NULL, password LONGTEXT NOT NULL, phone VARCHAR(255) NOT NULL, is_active TINYINT(1) NOT NULL, roles VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_DD002861E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE training (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, date DATE NOT NULL, venue VARCHAR(255) NOT NULL, time TIME NOT NULL, registration_fee INT NOT NULL, individual_amount INT NOT NULL, extra_personnel_amount INT NOT NULL, individuals_per_mda INT NOT NULL, letter_content LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE training_participant (id INT AUTO_INCREMENT NOT NULL, training_id INT NOT NULL, participant_id INT NOT NULL, mda_code INT NOT NULL, amount_paid INT NOT NULL, payment_method VARCHAR(255) NOT NULL, payment_status INT NOT NULL, payment_date DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(255) NOT NULL, email VARCHAR(100) NOT NULL, password LONGTEXT NOT NULL, is_active TINYINT(1) NOT NULL, roles VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE mda');
        $this->addSql('DROP TABLE mda_participant');
        $this->addSql('DROP TABLE training');
        $this->addSql('DROP TABLE training_participant');
        $this->addSql('DROP TABLE user');
    }
}
