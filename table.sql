DROP TABLE IF EXISTS card_popularity;

DELETE FROM card_popularity;

CREATE TABLE card_popularity (
    id serial PRIMARY KEY,
    id_card INTEGER NOT NULL,
    player VARCHAR(20) NOT NULL
);

SELECT * FROM card_popularity;