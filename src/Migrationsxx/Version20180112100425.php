<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180112100425 extends AbstractMigration
{
    public function up(Schema $schema): void
    {
        $this->abortIf(
            $this->connection->getDatabasePlatform()->getName() !== 'mysql',
            'Migration can only be executed safely on \'mysql\'.'
        );

        $schemaManager = $this->connection->getSchemaManager();

        if (!$schemaManager->tablesExist(['mda'])) {
            $this->addSql('CREATE TABLE mda (
            id INT AUTO_INCREMENT NOT NULL,
            mda_code INT NOT NULL,
            name VARCHAR(255) NOT NULL,
            email VARCHAR(100) DEFAULT NULL,
            address LONGTEXT DEFAULT NULL,
            phone VARCHAR(255) DEFAULT NULL,
            top_official_designation VARCHAR(255) DEFAULT NULL,
            UNIQUE INDEX UNIQ_846A7E0CE7927C74 (email),
            PRIMARY KEY(id)
        ) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        }
    }

    public function down(Schema $schema): void
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
