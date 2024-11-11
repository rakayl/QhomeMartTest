<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $films = [
            ['name' => 'The Shawshank Redemption', 'genre' => 'Drama'],
            ['name' => 'The Godfather', 'genre' => 'Crime, Drama'],
            ['name' => 'The Dark Knight', 'genre' => 'Action, Crime, Drama'],
            ['name' => 'Schindler\'s List', 'genre' => 'Biography, Drama, History'],
            ['name' => 'Pulp Fiction', 'genre' => 'Crime, Drama'],
            ['name' => 'The Lord of the Rings: The Return of the King', 'genre' => 'Action, Adventure, Drama'],
            ['name' => 'The Good, the Bad and the Ugly', 'genre' => 'Western'],
            ['name' => 'Forrest Gump', 'genre' => 'Drama, Romance'],
            ['name' => 'Inception', 'genre' => 'Action, Adventure, Sci-Fi'],
            ['name' => 'Fight Club', 'genre' => 'Drama'],
            ['name' => 'The Matrix', 'genre' => 'Action, Sci-Fi'],
            ['name' => 'The Empire Strikes Back', 'genre' => 'Action, Adventure, Fantasy'],
            ['name' => 'The Silence of the Lambs', 'genre' => 'Crime, Drama, Thriller'],
            ['name' => 'Se7en', 'genre' => 'Crime, Drama, Mystery'],
            ['name' => 'The Usual Suspects', 'genre' => 'Crime, Drama, Mystery'],
            ['name' => 'Interstellar', 'genre' => 'Adventure, Drama, Sci-Fi'],
            ['name' => 'City of God', 'genre' => 'Crime, Drama'],
            ['name' => 'The Green Mile', 'genre' => 'Crime, Drama, Fantasy'],
            ['name' => 'Parasite', 'genre' => 'Comedy, Drama, Thriller'],
            ['name' => 'The Lion King', 'genre' => 'Animation, Adventure, Drama'],
            ['name' => 'The Prestige', 'genre' => 'Drama, Mystery, Sci-Fi'],
            ['name' => 'Goodfellas', 'genre' => 'Biography, Crime, Drama'],
            ['name' => 'The Departed', 'genre' => 'Crime, Drama, Thriller'],
            ['name' => 'Whiplash', 'genre' => 'Drama, Music'],
            ['name' => 'The Dark Knight Rises', 'genre' => 'Action, Adventure, Thriller'],
            ['name' => 'Gladiator', 'genre' => 'Action, Adventure, Drama'],
            ['name' => 'The Shining', 'genre' => 'Drama, Horror'],
            ['name' => 'Saving Private Ryan', 'genre' => 'Drama, War'],
            ['name' => 'The Social Network', 'genre' => 'Biography, Drama'],
            ['name' => 'The Terminator', 'genre' => 'Action, Sci-Fi'],
            ['name' => 'Star Wars: A New Hope', 'genre' => 'Action, Adventure, Fantasy'],
            ['name' => 'Blade Runner', 'genre' => 'Drama, Sci-Fi, Thriller'],
            ['name' => 'Back to the Future', 'genre' => 'Adventure, Comedy, Sci-Fi'],
            ['name' => 'Inglourious Basterds', 'genre' => 'Adventure, Drama, War'],
            ['name' => 'The Great Escape', 'genre' => 'Adventure, Drama, History'],
            ['name' => 'The Hunt for Red October', 'genre' => 'Action, Adventure, Thriller'],
            ['name' => 'Casablanca', 'genre' => 'Drama, Romance, War'],
            ['name' => 'Good Will Hunting', 'genre' => 'Drama, Romance'],
            ['name' => 'A Clockwork Orange', 'genre' => 'Crime, Drama, Sci-Fi'],
            ['name' => 'Alien', 'genre' => 'Horror, Sci-Fi'],
            ['name' => '12 Angry Men', 'genre' => 'Drama'],
            ['name' => 'The Revenant', 'genre' => 'Adventure, Drama, Thriller'],
            ['name' => 'The Big Lebowski', 'genre' => 'Comedy, Crime'],
            ['name' => 'The Matrix Reloaded', 'genre' => 'Action, Sci-Fi'],
            ['name' => 'Memento', 'genre' => 'Mystery, Thriller'],
            ['name' => 'The Princess Bride', 'genre' => 'Adventure, Family, Fantasy'],
            ['name' => 'The Conjuring', 'genre' => 'Horror, Mystery, Thriller'],
            ['name' => 'The Wolf of Wall Street', 'genre' => 'Biography, Comedy, Crime'],
            ['name' => 'The Imitation Game', 'genre' => 'Biography, Drama, Thriller'],
            ['name' => 'Django Unchained', 'genre' => 'Drama, Western'],
            ['name' => 'The Curious Case of Benjamin Button', 'genre' => 'Drama, Fantasy, Romance'],
            ['name' => 'The Grand Budapest Hotel', 'genre' => 'Adventure, Comedy, Drama'],
            ['name' => 'Mad Max: Fury Road', 'genre' => 'Action, Adventure, Sci-Fi'],
            ['name' => 'Star Wars: The Force Awakens', 'genre' => 'Action, Adventure, Fantasy'],
            ['name' => 'The Matrix Revolutions', 'genre' => 'Action, Sci-Fi'],
            ['name' => 'A Beautiful Mind', 'genre' => 'Biography, Drama'],
            ['name' => 'The Truman Show', 'genre' => 'Comedy, Drama, Sci-Fi'],
            ['name' => 'The Dark Knight Trilogy', 'genre' => 'Action, Crime, Drama'],
            ['name' => 'The Godfather: Part II', 'genre' => 'Crime, Drama'],
            ['name' => 'The Wizard of Oz', 'genre' => 'Adventure, Family, Fantasy'],
            ['name' => 'The Sound of Music', 'genre' => 'Biography, Drama, Family'],
            ['name' => 'Jaws', 'genre' => 'Adventure, Thriller'],
            ['name' => 'The Fugitive', 'genre' => 'Action, Drama, Thriller'],
            ['name' => 'American Beauty', 'genre' => 'Drama'],
            ['name' => 'E.T. the Extra-Terrestrial', 'genre' => 'Family, Sci-Fi'],
            ['name' => 'The Notebook', 'genre' => 'Drama, Romance'],
            ['name' => 'Titanic', 'genre' => 'Drama, Romance'],
            ['name' => 'The King’s Speech', 'genre' => 'Biography, Drama, History'],
            ['name' => 'The Exorcist', 'genre' => 'Horror'],
            ['name' => 'Star Wars: Return of the Jedi', 'genre' => 'Action, Adventure, Fantasy'],
            ['name' => 'Moonlight', 'genre' => 'Drama'],
            ['name' => 'La La Land', 'genre' => 'Comedy, Drama, Music'],
            ['name' => 'The Hangover', 'genre' => 'Comedy'],
            ['name' => 'The Social Network', 'genre' => 'Biography, Drama'],
            ['name' => 'Jurassic Park', 'genre' => 'Action, Adventure, Sci-Fi'],
            ['name' => 'The Incredibles', 'genre' => 'Animation, Action, Adventure'],
            ['name' => 'The Lion King', 'genre' => 'Animation, Adventure, Drama'],
            ['name' => 'Spirited Away', 'genre' => 'Animation, Adventure, Family'],
            ['name' => 'The Godfather: Part III', 'genre' => 'Crime, Drama'],
            ['name' => 'The Hunger Games', 'genre' => 'Action, Adventure, Sci-Fi'],
            ['name' => 'The Pursuit of Happyness', 'genre' => 'Biography, Drama'],
            ['name' => 'The Princess Diaries', 'genre' => 'Comedy, Family'],
            ['name' => 'Frozen', 'genre' => 'Animation, Adventure, Comedy'],
            ['name' => 'Guardians of the Galaxy', 'genre' => 'Action, Adventure, Comedy']
        ];

        foreach ($films as $film) {
            DB::table('film')->insert([
                'name' => $film['name'],
                'genre' => $film['genre']
            ]);
        }
    }
}
