 --insertion de pays
 INSERT INTO Pays (nom,population,langue,id_continent)
     VALUES
     ('Maroc',40000000,'Arabic',1),
     ('Egypt',109000000,'Arabic',1),
     ('Nigeria',211000000,'Yoruba',1),
     ('Kenya',54000000,'Swahili',1),
     ('Algeria',45200000,'Arabic',1),
     ('Angola',35500000,'Portuguese',1),
     ('Botswana',2600000,'English',1),
     ('Cameroon',28900000,'French',1),
     ('Chad',17200000,'Franch',1),
     ('Ethiopia',120000000,'Amharic',1),
     ('Guinea',134000000,'French',1),
     ('Gambia',2600000,'English',1);

 --insertion de villes
  INSERT INTO Villes (pays_id,nom,description,type)
     VALUES
     (1,'Agadir','La capitale du Maroc, connue pour ses monuments historiques.', 'capitale'),
     (1,'Marrakech','Une grande ville célèbre pour ses palais, jardins et souks.', 'autre'),
     (2,'Le Caire','La capitale et plus grande ville d\Égypte, riche en histoire ancienne.','capitale'),
     (2,'Alexandrie','Une grande ville portuaire avec une ambiance méditerranéenne.', 'autre'),
     (3,'Abuja','La capitale du Nigéria, connue pour son architecture moderne.', 'capitale'),
     (3,'Lagos','La plus grande ville et centre économique du Nigéria.','autre'),
     (4,'Nairobi','La capitale du Kenya, réputée pour sa scène culturelle dynamique.','capitale'),
     (4,'Mombasa','Ville côtière célèbre pour ses plages et ses sites historiques.','autre'),
     (5,'Alger','La capitale, connue pour ses bâtiments blancs et sa côte méditerranéenne.','capitale'),
     (5,'Oran','Une ville portuaire avec une histoire riche et une scène culturelle animée.','autre'),
     (6,'Luanda','La capitale de Angola, célèbre pour sa promenade en bord de mer.','capitale'),
     (6,'Benguela','Une ville connue pour ses plages et son architecture coloniale.','autre'),
     (7,'Gaborone','La capitale du Botswana, reconnue pour ses commodités modernes.','capitale'),
     (7,'Francistown','Une ville minière et la deuxième plus grande ville du Botswana.','autre'),
     (8,'Yaoundé','La capitale, connue pour ses collines verdoyantes et ses ambassades.','capitale'),
     (8,'Douala','La plus grande ville et centre économique du Cameroun.','autre'),
     (9,'Djaména','La capitale du Tchad, située près du fleuve Chari.','capitale'),
     (9,'Moundou','Une grande ville industrielle et centre de industrie pétrolière.','autre'),
     (10,'Addis-Abeba', 'La capitale et centre politique de lAfrique.','capitale'),
     (10,'Dire Dawa','Un important centre commercial et industriel.','autre'),
     (11,'Conakry','La capitale de la Guinée, située sur la côte atlantique.','capitale'),
     (11,'Kankan','Un centre régional connu pour ses activités commerciales.','autre'),
     (12,'Banjul','La capitale de la Gambie, située sur une île.','capitale'),
     (12,'Serekunda','La plus grande zone urbaine de Gambie, connue pour ses marchés.','autre');    

     INSERT INTO continent (id_continent,nom)
     VALUES
     (1,'Afrique');