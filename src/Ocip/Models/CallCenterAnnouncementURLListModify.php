<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterAnnouncementURLListModify
 *
 * Contains a list of URLs for modify.
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:1035","type":"sequence"}]
 */
class CallCenterAnnouncementURLListModify
{
    /**
     * @ElementName url1
     * @Type string
     * @Nillable
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:1035
     * @MinLength 1
     * @MaxLength 256
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $url1 = null;

    /**
     * @ElementName url2
     * @Type string
     * @Nillable
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:1035
     * @MinLength 1
     * @MaxLength 256
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $url2 = null;

    /**
     * @ElementName url3
     * @Type string
     * @Nillable
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:1035
     * @MinLength 1
     * @MaxLength 256
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $url3 = null;

    /**
     * @ElementName url4
     * @Type string
     * @Nillable
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:1035
     * @MinLength 1
     * @MaxLength 256
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $url4 = null;

    /**
     * Getter for url1
     *
     * @return string|null
     */
    public function getUrl1()
    {
        return $this->url1 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->url1;
    }

    /**
     * Setter for url1
     *
     * @param string|null $url1
     * @return $this
     */
    public function setUrl1($url1 = null)
    {
        if ($url1 === null) {
            $this->url1 = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->url1 = $url1;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUrl1()
    {
        $this->url1 = null;
        return $this;
    }

    /**
     * Getter for url2
     *
     * @return string|null
     */
    public function getUrl2()
    {
        return $this->url2 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->url2;
    }

    /**
     * Setter for url2
     *
     * @param string|null $url2
     * @return $this
     */
    public function setUrl2($url2 = null)
    {
        if ($url2 === null) {
            $this->url2 = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->url2 = $url2;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUrl2()
    {
        $this->url2 = null;
        return $this;
    }

    /**
     * Getter for url3
     *
     * @return string|null
     */
    public function getUrl3()
    {
        return $this->url3 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->url3;
    }

    /**
     * Setter for url3
     *
     * @param string|null $url3
     * @return $this
     */
    public function setUrl3($url3 = null)
    {
        if ($url3 === null) {
            $this->url3 = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->url3 = $url3;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUrl3()
    {
        $this->url3 = null;
        return $this;
    }

    /**
     * Getter for url4
     *
     * @return string|null
     */
    public function getUrl4()
    {
        return $this->url4 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->url4;
    }

    /**
     * Setter for url4
     *
     * @param string|null $url4
     * @return $this
     */
    public function setUrl4($url4 = null)
    {
        if ($url4 === null) {
            $this->url4 = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->url4 = $url4;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUrl4()
    {
        $this->url4 = null;
        return $this;
    }
}

