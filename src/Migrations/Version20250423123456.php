<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;


final class Version20250423123456 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Creates the vistor table';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('CREATE TABLE vistor (
            id INT AUTO_INCREMENT NOT NULL,
            session_id VARCHAR(255) NOT NULL,
            date DATE NOT NULL,
            PRIMARY KEY(id)
        ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('DROP TABLE vistor');
    }
}
