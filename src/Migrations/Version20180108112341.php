<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180108112341 extends AbstractMigration
{
    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE old_mdatable');
        $this->addSql('ALTER TABLE mda CHANGE email email VARCHAR(100) DEFAULT NULL, CHANGE address address LONGTEXT DEFAULT NULL, CHANGE phone phone VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE old_mdatable (mda_id INT AUTO_INCREMENT NOT NULL, mda_establishmentcode VARCHAR(25) NOT NULL COLLATE latin1_swedish_ci, mda_fullname VARCHAR(255) NOT NULL COLLATE latin1_swedish_ci, mda_acronym VARCHAR(25) DEFAULT NULL COLLATE latin1_swedish_ci, status INT DEFAULT 0, verification_code VARCHAR(100) DEFAULT NULL COLLATE latin1_swedish_ci, sms_code INT DEFAULT NULL, update_status INT DEFAULT 0 NOT NULL, year_of_establishment DATE NOT NULL, address VARCHAR(500) NOT NULL COLLATE latin1_swedish_ci, portal_status INT DEFAULT 0 NOT NULL, UNIQUE INDEX mda_id_UNIQUE (mda_id), UNIQUE INDEX mda_establishmentcode (mda_establishmentcode), UNIQUE INDEX mda_fullname (mda_fullname), PRIMARY KEY(mda_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE mda CHANGE email email VARCHAR(100) NOT NULL COLLATE utf8_unicode_ci, CHANGE address address LONGTEXT NOT NULL COLLATE utf8_unicode_ci, CHANGE phone phone VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci');
    }
}
