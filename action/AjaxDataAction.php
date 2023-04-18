<?php
    require_once("action/CommonAction.php");
    require_once("action/DAO/PopularityDAO.php");

    class AjaxDataAction extends CommonAction {

        public function __construct() {
            parent::__construct(CommonAction::$VISIBILITY_MEMBER);
        }

        protected function executeAction() {
            if(isset($_POST["id_card"]) && isset($_POST["player"]))
                PopularityDAO::addCardDB($_POST["id_card"], $_POST["player"]);

            if(isset($_POST["clear"])) {
                PopularityDAO::clearCards();
            }

            
            if(isset($_POST["player"])) {
                $result = PopularityDAO::getCardsByPLayer();
            } else {
                $result = PopularityDAO::getCards();
            }


            return compact("result");
        }
    }