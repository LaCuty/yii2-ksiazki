<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%book}}` and inserts sample data.
 */
class m250426_125727_create_book_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%book}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'author' => $this->string()->notNull(),
            'year' => $this->integer(4)->notNull(),
        ]);

        $this->batchInsert('{{%book}}', ['title', 'author', 'year'], [
            ['Władca Pierścieni', 'J.R.R. Tolkien', 1954],
            ['Hobbit', 'J.R.R. Tolkien', 1937],
            ['Harry Potter i Kamień Filozoficzny', 'J.K. Rowling', 1997],
            ['Harry Potter i Komnata Tajemnic', 'J.K. Rowling', 1998],
            ['Zbrodnia i kara', 'Fiodor Dostojewski', 1866],
            ['Mistrz i Małgorzata', 'Michaił Bułhakow', 1966],
            ['Duma i uprzedzenie', 'Jane Austen', 1813],
            ['Sto lat samotności', 'Gabriel García Márquez', 1967],
            ['Rok 1984', 'George Orwell', 1949],
            ['Folwark zwierzęcy', 'George Orwell', 1945],
            ['Opowieść podręcznej', 'Margaret Atwood', 1985],
            ['Mały Książę', 'Antoine de Saint-Exupéry', 1943],
            ['Kod Leonarda da Vinci', 'Dan Brown', 2003],
            ['Inferno', 'Dan Brown', 2013],
            ['Metro 2033', 'Dmitry Glukhovsky', 2005],
            ['Gra o tron', 'George R.R. Martin', 1996],
            ['Starcie królów', 'George R.R. Martin', 1998],
            ['Zew Cthulhu', 'H.P. Lovecraft', 1928],
            ['Buszujący w zbożu', 'J.D. Salinger', 1951],
			['Wielki Gatsby', 'F. Scott Fitzgerald', 1925],
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('{{%book}}');
    }
}
