<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * DATA message
 */
class DATA extends \ProtobufMessage
{
    /* Field index constants */
    const LEN = 1;
    const DATA = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::LEN => array(
            'name' => 'len',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DATA => array(
            'name' => 'data',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::LEN] = null;
        $this->values[self::DATA] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'len' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLen($value)
    {
        return $this->set(self::LEN, $value);
    }

    /**
     * Returns value of 'len' property
     *
     * @return integer
     */
    public function getLen()
    {
        $value = $this->get(self::LEN);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'len' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLen()
    {
        return $this->get(self::LEN) !== null;
    }

    /**
     * Sets value of 'data' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setData($value)
    {
        return $this->set(self::DATA, $value);
    }

    /**
     * Returns value of 'data' property
     *
     * @return string
     */
    public function getData()
    {
        $value = $this->get(self::DATA);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'data' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasData()
    {
        return $this->get(self::DATA) !== null;
    }
}
}