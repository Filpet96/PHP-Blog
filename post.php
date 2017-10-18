<?php
declare(strict_types=1);

// Copyright with Concatenation
$copyright = 'Copyright &copy;';
$name = 'Filip Petersson';
$year = date("Y");
$copyrightby = $copyright . ' ' . $name . ' ' . $year;


// Post Data
$posts = [

// Marty McFly
'Marty McFly' => [
  'Title' => 'Back to the future',
  'Content' => 'No, I refuse to except the responsibility. Is she pretty? Don\'t say a word. Are those my clocks I hear? Thank god I found you. Listen, can you meet me at Twin Pines Mall tonight at 1:15? I\'ve made a major breakthrough, I\'ll need your assistance',
  'Author' => ['id' => '001', 'name' =>  'Marty McFly'],
  'Published' => '1985-06-03',
  'Likes' => 359,
  'Image' => '/images/delorean.jpg'
],
[
  'Title' => 'Marty McFly',
  'Content' => 'Marty was born on June 12, 1968 in Hill Valley, California to George and Lorraine McFly. He was the youngest of three children. He had a brother Dave, who was born in 1963, and sister Linda, who was born in 1965.',
  'Author' => ['id' => '002', 'name' =>  'Marty McFly'],
  'Published' => '1989-11-20',
  'Likes' => 219,
  'Image' => 'http://filmgarb.com/wp-content/uploads/film-back_to_the_future-1985-marty_mcfly-michael_j_fox-jacket-jean_jacket.jpg'
],

// The Joker
'The Joker' => [
  'Title' => 'The Dark Knight',
  'Content' => 'I had a vision of a world without Batman. The Mob ground out a little profit and the police tried to shut them down one block at a time. And it was so boring. I\'ve had a change of heart. I don\'t want Mr Reese spoiling everything but why should I have all the fun? Let\'s give someone else a chance. If Coleman Reese isn\'t dead in 60 minutes then I blow up a hospital.',
  'Author' => ['id' => '003', 'name' =>  ' The Joker'],
  'Published' => '2008-07-13',
  'Likes' => '469',
  'Image' => 'http://cdn2.business2community.com/wp-content/uploads/2016/10/Heaths-Joker-300x128.jpg.jpg'
],
[
  'Title' => 'The Joker',
  'Content' => 'The Joker is a fictional supervillain from American comic book publisher DC Comics and the main antagonist in Christopher Nolan\'s 2008 superhero film The Dark Knight. He was portrayed by late Australian actor Heath Ledger. Ledger\'s interpretation of the character is specifically influenced by the graphic novels Batman: The Killing Joke and Arkham Asylum: A Serious House on Serious Earth. In the film, he wears the character\'s traditional color palette, while his facial appearance includes clown makeup that covers facial scars of a Glasgow smile.',
  'Author' => ['id' => '004', 'name' =>  'The Joker'],
  'Published' => '2008-08-13',
  'Likes' => '1269',
  'Image' => 'https://wallpaperhdzone.com/wp-content/uploads/2016/02/joker-wallpaper4.jpg'
],

// Rocky Balboa
'Rocky' => [
  'Title' => 'Rocky V',
  'Content' => 'Hey there, don\'t punch me. I\'m gettin\' brittle as it is. Look at this, ya know? I been runnin\' up and down these steps for 20 years. And I never knew there was valuable pictures in this building, ya know.',
  'Author' => ['id' => '005', 'name' =>  'Rocky Balboa'],
  'Published' => '1990-11-16',
  'Likes' => '869',
  'Image' => 'https://images6.alphacoders.com/341/341558.jpg'
],
[
  'Title' => 'Rocky',
  'Content' => 'Let me tell you something you already know. The world ain\'t all sunshine and rainbows. It is a very mean and nasty place and it will beat you to your knees and keep you there permanently if you let it. You, me, or nobody is gonna hit as hard as life. But it ain\'t how hard you hit; it\'s about how hard you can get hit, and keep moving forward. How much you can take, and keep moving forward. That\'s how winning is done. Now, if you know what you\'re worth, then go out and get what you\'re worth. But you gotta be willing to take the hit, and not pointing fingers saying you ain\'t where you are because of him, or her, or anybody. Cowards do that and that ain\'t you. You\'re better than that.',
  'Author' => ['id' => '006', 'name' =>  'Rocky Balboa'],
  'Published' => '1976-11-21',
  'Likes' => '8069',
  'Image' => 'https://images7.alphacoders.com/392/392019.jpg'
],

// Goodfellas
'Goodfellas' => [
  'Title' => 'Goodfellas',
  'Content' => 'See, the hardest thing for me was leaving the life. I still loved the life. And we were treated like movie stars with muscle. We had it all just for the asking. Our wives, mothers, kids, everybody rode along. I had paper bags filled with jewelry stashed in the kitchen. I had a sugar bowl full of coke next to the bed.',
  'Author' => ['id' => '007', 'name' =>  'James Conway'],
  'Published' => '1990-09-17',
  'Likes' => '569',
  'Image' => 'https://images7.alphacoders.com/341/341191.jpg'
],
[
  'Title' => 'Goodfellas',
  'Content' => 'Scorsese initially named the film Wise Guy and postponed making it; later, he and Pileggi changed the name to Goodfellas. To prepare for their roles in the film, Robert De Niro, Joe Pesci, and Ray Liotta often spoke with Pileggi, who shared research material left over from writing the book. According to Pesci, improvisation and ad-libbing came out of rehearsals wherein Scorsese gave the actors freedom to do whatever they wanted. The director made transcripts of these sessions, took the lines he liked best, and put them into a revised script, which the cast worked from during principal photography.',
  'Author' => ['id' => '008', 'name' =>  'James Conway'],
  'Published' => '1990-02-17',
  'Likes' => '913',
  'Image' => 'https://i.imgur.com/sNUoacP.jpg'
],

// Malcolm X
'Malcolm X' => [
  'Title' => 'Malcolm X',
  'Content' => 'As Brother Malcolm said: \'We declare our right on this earth to be a man, to be a human being, to be given the rights of a human being, to be respected as a human being in this society on this earth in this day which we intend to bring into existence -- by any means necessary!',
  'Author' => ['id' => '009', 'name' =>  'Malcolm X'],
  'Published' => '1992-11-18',
  'Likes' => '169',
  'Image' => 'https://media2.s-nbcnews.com/i/MSNBC/Components/Video/150220/a_flashback_malcolm_150219.jpg'
],
[
  'Title' => 'Malcolm X Biography',
  'Content' => 'Malcolm X was born Malcolm Little on May 19, 1925 in Omaha, Nebraska. His mother, Louise Norton Little, was a homemaker occupied with the family’s eight children. His father, Earl Little, was an outspoken Baptist minister and avid supporter of Black Nationalist leader Marcus Garvey. Earl’s civil rights activism prompted death threats from the white supremacist organization Black Legion, forcing the family to relocate twice before Malcolm’s fourth birthday.',
  'Author' => ['id' => '010', 'name' =>  'Malcolm X'],
  'Published' => '1925-17-08',
  'Likes' => '1489',
  'Image' => 'http://www.history.com/s3static/video-thumbnails/AETN-History_VMS/21/203/tdih-feb21-HD.jpg'
],

];


// $firstname = $_POST["firstname"];
// $lastname = $_POST["lastname"];
// $title = $_POST["title"];
// $text = $_POST["text"];
 ?>
