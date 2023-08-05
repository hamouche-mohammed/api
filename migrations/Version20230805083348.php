<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230805083348 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE robot ADD model_id_id INT DEFAULT NULL, ADD employee_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE robot ADD CONSTRAINT FK_D82B7EE44107BEA0 FOREIGN KEY (model_id_id) REFERENCES model (id)');
        $this->addSql('ALTER TABLE robot ADD CONSTRAINT FK_D82B7EE49749932E FOREIGN KEY (employee_id_id) REFERENCES employee (id)');
        $this->addSql('CREATE INDEX IDX_D82B7EE44107BEA0 ON robot (model_id_id)');
        $this->addSql('CREATE INDEX IDX_D82B7EE49749932E ON robot (employee_id_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE robot DROP FOREIGN KEY FK_D82B7EE44107BEA0');
        $this->addSql('ALTER TABLE robot DROP FOREIGN KEY FK_D82B7EE49749932E');
        $this->addSql('DROP INDEX IDX_D82B7EE44107BEA0 ON robot');
        $this->addSql('DROP INDEX IDX_D82B7EE49749932E ON robot');
        $this->addSql('ALTER TABLE robot DROP model_id_id, DROP employee_id_id');
    }
}
