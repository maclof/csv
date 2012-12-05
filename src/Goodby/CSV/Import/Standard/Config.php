<?php

namespace Goodby\CSV\Import\Standard;

class Config
{
    /**
     * @var string
     */
    private $delimiter = ',';

    /**
     * @var string
     */
    private $enclosure = '"';

    /**
     * @var string
     */
    private $escape = '\\';

    /**
     * @var string
     */
    private $fromCharset = 'auto';

    /**
     * @var string
     */
    private $toCharset;

    /**
     * Set delimiter
     * @param string $delimiter
     * @return Config
     */
    public function setDelimiter($delimiter)
    {
        $this->delimiter = $delimiter;
        return $this;
    }

    /**
     * Return delimiter
     * @return string
     */
    public function getDelimiter()
    {
        return $this->delimiter;
    }

    /**
     * Set enclosure
     * @param string $enclosure
     * @return Config
     */
    public function setEnclosure($enclosure)
    {
        $this->enclosure = $enclosure;
        return $this;
    }

    /**
     * Return enclosure
     * @return string
     */
    public function getEnclosure()
    {
        return $this->enclosure;
    }

    /**
     * Set escape
     * @param string $escape
     * @return Config
     */
    public function setEscape($escape)
    {
        $this->escape = $escape;
        return $this;
    }

    /**
     * Return escape
     * @return string
     */
    public function getEscape()
    {
        return $this->escape;
    }

    public function setFromCharset($fromCharset)
    {
        $this->fromCharset = $fromCharset;
        return $this;
    }

    public function getFromCharset()
    {
        return $this->fromCharset;
    }

    public function setToCharset($toCharset)
    {
        $this->toCharset = $toCharset;
        return $this;
    }

    public function getToCharset()
    {
        return $this->toCharset;
    }
}
