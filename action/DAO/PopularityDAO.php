<?php
    require_once("action/DAO/Connection.php");
    require_once("action/DAO/PopularityDAO.php");

    class PopularityDAO {
        public static function getCards() {
            $connection = Connection::getConnection();
            $statement = $connection->prepare("SELECT id_card, COUNT(id_card) AS cards_by_id FROM card_popularity GROUP BY id_card ORDER BY id_card, cards_by_id;");

            $statement->setFetchMode(PDO::FETCH_ASSOC);
            $statement->execute();

            return $statement->fetchAll();
        }

        public static function getCardsByPLayer() {
            $connection = Connection::getConnection();
            $statement = $connection->prepare("SELECT player, id_card, COUNT(id_card) AS cards_by_id FROM card_popularity GROUP BY id_card, player ORDER BY player, id_card, cards_by_id;");

            $statement->setFetchMode(PDO::FETCH_ASSOC);
            $statement->execute();

            return $statement->fetchAll();
        }

        public static function addCardDB($id_card, $player) {
            $connection = Connection::getConnection();

            $statement = $connection->prepare("INSERT INTO card_popularity (id_card, player) VALUES (?, ?)");
            $statement->bindParam(1, $id_card);
            $statement->bindParam(2, $player);
            $statement->execute();
        }

        public static function clearCards() {
            $connection = Connection::getConnection();

            $statement = $connection->prepare("TRUNCATE TABLE card_popularity");

            $statement->execute();
        }
    }