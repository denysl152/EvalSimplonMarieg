1.SELECT COUNT('VideoTitre')  AS NbreVideo FROM `video`

59

2.SELECT `VideoTitre` AS Titre,`ThemeLib` AS Genre FROM video JOIN thematic ON `VideoNum`= `ThematicVideoNum` JOIN theme ON `ThematicThemeNum`=`ThemeNum` WHERE `ThemeNum`=3 ORDER BY `VideoTitre` ASC


Titre                                      Genre

Automata                                  Thriller
Aux Yeux De Tous                          Thriller
Dark City                                 Thriller
Kamikaze                                  Thriller
L'Affaire SK1                             Thriller
L'Armée des 12 Singes                     Thriller
Limitless                                 Thriller
Mesrine : L'Ennemi Public n°1             Thriller
Mesrine : L'Instinct de mort              Thriller
No Country for Old Men                    Thriller
Predestination                            Thriller
Reservoir Dogs                            Thriller
Snatch                                    Thriller
Source Code                               Thriller
Sur mes Lèvres                            Thriller
Sweeney Todd<br/>Le Diabolique Barbier    Thriller
de Fleet St...  
The Big Lebowski                          Thriller
Un Homme Idéal                            Thriller
V pour Vendetta                            Thriller

