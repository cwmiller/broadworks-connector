<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterAnnouncementURLList
 *
 * Contains list of urls
 */
class CallCenterAnnouncementURLList
{

    /**
     * @ElementName url1
     * @var string|null
     */
    private $url1 = null;

    /**
     * @ElementName url2
     * @var string|null
     */
    private $url2 = null;

    /**
     * @ElementName url3
     * @var string|null
     */
    private $url3 = null;

    /**
     * @ElementName url4
     * @var string|null
     */
    private $url4 = null;

    /**
     * Getter for url1
     *
     * @ElementName url1
     * @return string|null
     */
    public function getUrl1()
    {
        return $this->url1;
    }

    /**
     * Setter for url1
     *
     * @ElementName url1
     * @param string|null $url1
     * @return $this
     */
    public function setUrl1($url1)
    {
        $this->url1 = $url1;
        return $this;
    }

    /**
     * Getter for url2
     *
     * @ElementName url2
     * @return string|null
     */
    public function getUrl2()
    {
        return $this->url2;
    }

    /**
     * Setter for url2
     *
     * @ElementName url2
     * @param string|null $url2
     * @return $this
     */
    public function setUrl2($url2)
    {
        $this->url2 = $url2;
        return $this;
    }

    /**
     * Getter for url3
     *
     * @ElementName url3
     * @return string|null
     */
    public function getUrl3()
    {
        return $this->url3;
    }

    /**
     * Setter for url3
     *
     * @ElementName url3
     * @param string|null $url3
     * @return $this
     */
    public function setUrl3($url3)
    {
        $this->url3 = $url3;
        return $this;
    }

    /**
     * Getter for url4
     *
     * @ElementName url4
     * @return string|null
     */
    public function getUrl4()
    {
        return $this->url4;
    }

    /**
     * Setter for url4
     *
     * @ElementName url4
     * @param string|null $url4
     * @return $this
     */
    public function setUrl4($url4)
    {
        $this->url4 = $url4;
        return $this;
    }


}

