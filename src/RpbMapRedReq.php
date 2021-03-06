<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@// Source: riak.proto
//   Date: 2015-01-16 03:40:25


namespace Riak\Client\ProtoBuf {

    class RpbMapRedReq extends \DrSlump\Protobuf\Message
    {
        /** @var \DrSlump\Protobuf\Descriptor */
        protected static $__descriptor;
        /** @var \Closure[] */
        protected static $__extensions = array();

        public static function descriptor()
        {
            $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, '.RpbMapRedReq');

            // required bytes request = 1
            $f = new \DrSlump\Protobuf\Field();
            $f->number = 1;
            $f->name   = "request";
            $f->rule   = \DrSlump\Protobuf\Protobuf::RULE_REQUIRED;
            $f->type   = \DrSlump\Protobuf\Protobuf::TYPE_BYTES;

            $descriptor->addField($f);

            // required bytes content_type = 2
            $f = new \DrSlump\Protobuf\Field();
            $f->number = 2;
            $f->name   = "content_type";
            $f->rule   = \DrSlump\Protobuf\Protobuf::RULE_REQUIRED;
            $f->type   = \DrSlump\Protobuf\Protobuf::TYPE_BYTES;

            $descriptor->addField($f);

            foreach (self::$__extensions as $cb) {
                $descriptor->addField($cb(), true);
            }

            return $descriptor;
        }

        /**
         * Check if "request" has a value
         *
         * @return boolean
         */
        public function hasRequest()
        {
            return isset($this->request);
        }

        /**
         * Clear "request" value
         */
        public function clearRequest()
        {
            unset($this->request);
        }

        /**
         * Get "request" value
         * @return string                  *
         *
         */
        public function getRequest()
        {
            return $this->request;
        }

        /**
         * Set "request" value
         *
         * @param string $value
         */
        public function setRequest($value)
        {
            return $this->request = $value;
        }

        /**
         * Check if "content_type" has a value
         *
         * @return boolean
         */
        public function hasContentType()
        {
            return isset($this->content_type);
        }

        /**
         * Clear "content_type" value
         */
        public function clearContentType()
        {
            unset($this->content_type);
        }

        /**
         * Get "content_type" value
         * @return string                  *
         *
         */
        public function getContentType()
        {
            return $this->content_type;
        }

        /**
         * Set "content_type" value
         *
         * @param string $value
         */
        public function setContentType($value)
        {
            return $this->content_type = $value;
        }
    }
}
