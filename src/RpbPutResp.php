<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@// Source: riak.proto
//   Date: 2015-01-16 03:40:25


namespace Riak\Client\ProtoBuf {

    class RpbPutResp extends \DrSlump\Protobuf\Message
    {
        /** @var \DrSlump\Protobuf\Descriptor */
        protected static $__descriptor;
        /** @var \Closure[] */
        protected static $__extensions = array();

        public static function descriptor()
        {
            $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, '.RpbPutResp');

            // repeated message content = 1
            $f = new \DrSlump\Protobuf\Field();
            $f->number = 1;
            $f->name   = "content";
            $f->rule   = \DrSlump\Protobuf\Protobuf::RULE_REPEATED;
            $f->type   = \DrSlump\Protobuf\Protobuf::TYPE_MESSAGE;

            $f->reference = '\Riak\Client\ProtoBuf\RpbContent';

            $descriptor->addField($f);

            // optional bytes vclock = 2
            $f = new \DrSlump\Protobuf\Field();
            $f->number = 2;
            $f->name   = "vclock";
            $f->rule   = \DrSlump\Protobuf\Protobuf::RULE_OPTIONAL;
            $f->type   = \DrSlump\Protobuf\Protobuf::TYPE_BYTES;

            $descriptor->addField($f);

            // optional bytes key = 3
            $f = new \DrSlump\Protobuf\Field();
            $f->number = 3;
            $f->name   = "key";
            $f->rule   = \DrSlump\Protobuf\Protobuf::RULE_OPTIONAL;
            $f->type   = \DrSlump\Protobuf\Protobuf::TYPE_BYTES;

            $descriptor->addField($f);

            foreach (self::$__extensions as $cb) {
                $descriptor->addField($cb(), true);
            }

            return $descriptor;
        }

        /**
         * Check if "content" has a value
         *
         * @return boolean
         */
        public function hasContent()
        {
            return isset($this->content);
        }

        /**
         * Clear "content" value
         */
        public function clearContent()
        {
            unset($this->content);
        }

        /**
         * Get "content" value
         *
         * @return \PhpOption\Option of type RpbContent[]
         */
        public function getContent($idx = null)
        {
            if (null == $idx || !array_key_exists($idx, $this->content)) {
                return  \PhpOption\None::create();
            }

            return new \PhpOption\Some($this->content[$idx]);
        }

        /**
         * Get "content" list of values
         *
         * @return RpbContent[]
         */
        public function getContentList()
        {
            return $this->content;
        }

        /**
         * Set "content" value
         *
         * @param RpbContent[] $value
         */
        public function setContent($value)
        {
            return $this->content = $value;
        }

        /**
         * Add a new element to "content"
         *
         * @param RpbContent $value
         */
        public function addContent($value)
        {
            $this->content[] = $value;
        }

        /**
         * Check if "vclock" has a value
         *
         * @return boolean
         */
        public function hasVclock()
        {
            return isset($this->vclock);
        }

        /**
         * Clear "vclock" value
         */
        public function clearVclock()
        {
            unset($this->vclock);
        }

        /**
         * Get "vclock" value
         * @return \PhpOption\Option of type (string)
         *
         *
         */
        public function getVclock()
        {
            return \PhpOption\Option::fromValue($this->vclock);
        }

        /**
         * Set "vclock" value
         *
         * @param string $value
         */
        public function setVclock($value)
        {
            return $this->vclock = $value;
        }

        /**
         * Check if "key" has a value
         *
         * @return boolean
         */
        public function hasKey()
        {
            return isset($this->key);
        }

        /**
         * Clear "key" value
         */
        public function clearKey()
        {
            unset($this->key);
        }

        /**
         * Get "key" value
         * @return \PhpOption\Option of type (string)
         *
         *
         */
        public function getKey()
        {
            return \PhpOption\Option::fromValue($this->key);
        }

        /**
         * Set "key" value
         *
         * @param string $value
         */
        public function setKey($value)
        {
            return $this->key = $value;
        }
    }
}
