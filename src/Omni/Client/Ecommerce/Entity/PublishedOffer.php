<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 * @codingStandardsIgnoreFile
 */


namespace Ls\Omni\Client\Ecommerce\Entity;

use Ls\Omni\Client\Ecommerce\Entity\Enum\OfferDiscountType;
use Ls\Omni\Client\Ecommerce\Entity\Enum\OfferType;
use Ls\Omni\Exception\InvalidEnumException;

class PublishedOffer extends Entity
{

    /**
     * @property ArrayOfImageView $Images
     */
    protected $Images = null;

    /**
     * @property ArrayOfOfferDetails $OfferDetails
     */
    protected $OfferDetails = null;

    /**
     * @property ArrayOfPublishedOfferLine $OfferLines
     */
    protected $OfferLines = null;

    /**
     * @property OfferDiscountType $Code
     */
    protected $Code = null;

    /**
     * @property string $Description
     */
    protected $Description = null;

    /**
     * @property string $Details
     */
    protected $Details = null;

    /**
     * @property string $ExpirationDate
     */
    protected $ExpirationDate = null;

    /**
     * @property string $OfferId
     */
    protected $OfferId = null;

    /**
     * @property boolean $Selected
     */
    protected $Selected = null;

    /**
     * @property OfferType $Type
     */
    protected $Type = null;

    /**
     * @property string $ValidationText
     */
    protected $ValidationText = null;

    /**
     * @param ArrayOfImageView $Images
     * @return $this
     */
    public function setImages($Images)
    {
        $this->Images = $Images;
        return $this;
    }

    /**
     * @return ArrayOfImageView
     */
    public function getImages()
    {
        return $this->Images;
    }

    /**
     * @param ArrayOfOfferDetails $OfferDetails
     * @return $this
     */
    public function setOfferDetails($OfferDetails)
    {
        $this->OfferDetails = $OfferDetails;
        return $this;
    }

    /**
     * @return ArrayOfOfferDetails
     */
    public function getOfferDetails()
    {
        return $this->OfferDetails;
    }

    /**
     * @param ArrayOfPublishedOfferLine $OfferLines
     * @return $this
     */
    public function setOfferLines($OfferLines)
    {
        $this->OfferLines = $OfferLines;
        return $this;
    }

    /**
     * @return ArrayOfPublishedOfferLine
     */
    public function getOfferLines()
    {
        return $this->OfferLines;
    }

    /**
     * @param OfferDiscountType|string $Code
     * @return $this
     * @throws InvalidEnumException
     */
    public function setCode($Code)
    {
        if ( ! $Code instanceof OfferDiscountType ) {
            if ( OfferDiscountType::isValid( $Code ) )
                $Code = new OfferDiscountType( $Code );
            elseif ( OfferDiscountType::isValidKey( $Code ) )
                $Code = new OfferDiscountType( constant( "OfferDiscountType::$Code" ) );
            elseif ( ! $Code instanceof OfferDiscountType )
                throw new InvalidEnumException();
        }
        $this->Code = $Code->getValue();

        return $this;
    }

    /**
     * @return OfferDiscountType
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param string $Description
     * @return $this
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param string $Details
     * @return $this
     */
    public function setDetails($Details)
    {
        $this->Details = $Details;
        return $this;
    }

    /**
     * @return string
     */
    public function getDetails()
    {
        return $this->Details;
    }

    /**
     * @param string $ExpirationDate
     * @return $this
     */
    public function setExpirationDate($ExpirationDate)
    {
        $this->ExpirationDate = $ExpirationDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getExpirationDate()
    {
        return $this->ExpirationDate;
    }

    /**
     * @param string $OfferId
     * @return $this
     */
    public function setOfferId($OfferId)
    {
        $this->OfferId = $OfferId;
        return $this;
    }

    /**
     * @return string
     */
    public function getOfferId()
    {
        return $this->OfferId;
    }

    /**
     * @param boolean $Selected
     * @return $this
     */
    public function setSelected($Selected)
    {
        $this->Selected = $Selected;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getSelected()
    {
        return $this->Selected;
    }

    /**
     * @param OfferType|string $Type
     * @return $this
     * @throws InvalidEnumException
     */
    public function setType($Type)
    {
        if ( ! $Type instanceof OfferType ) {
            if ( OfferType::isValid( $Type ) )
                $Type = new OfferType( $Type );
            elseif ( OfferType::isValidKey( $Type ) )
                $Type = new OfferType( constant( "OfferType::$Type" ) );
            elseif ( ! $Type instanceof OfferType )
                throw new InvalidEnumException();
        }
        $this->Type = $Type->getValue();

        return $this;
    }

    /**
     * @return OfferType
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * @param string $ValidationText
     * @return $this
     */
    public function setValidationText($ValidationText)
    {
        $this->ValidationText = $ValidationText;
        return $this;
    }

    /**
     * @return string
     */
    public function getValidationText()
    {
        return $this->ValidationText;
    }


}

