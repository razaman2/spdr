<?php

    namespace App\Helpers;

    class EtfParser
    {
        private $document;

        public function __construct($document) {
            $this->document = $document;
        }

        public function process() {
            return $this->getTables($this->document);
        }

        private function getTables($document) {
            $pointer = 0;
            while($pointer < strlen($document)) {

            }
        }
    }
