<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 * @codingStandardsIgnoreFile
 */


namespace Ls\Omni\Client\Ecommerce\Entity;

use Ls\Omni\Client\Ecommerce\Entity\Enum\LineType;
use Ls\Omni\Exception\InvalidEnumException;

class SalesEntryLine extends Entity
{

    /**
     * @property float $Amount
     */
    protected $Amount = null;

    /**
     * @property float $DiscountAmount
     */
    protected $DiscountAmount = null;

    /**
     * @property float $DiscountPercent
     */
    protected $DiscountPercent = null;

    /**
     * @property string $ItemDescription
     */
    protected $ItemDescription = null;

    /**
     * @property string $ItemId
     */
    protected $ItemId = null;

    /**
     * @property string $ItemImageId
     */
    protected $ItemImageId = null;

    /**
     * @property int $LineNumber
     */
    protected $LineNumber = null;

    /**
     * @property LineType $LineType
     */
    protected $LineType = null;

    /**
     * @property float $NetAmount
     */
    protected $NetAmount = null;

    /**
     * @property float $NetPrice
     */
    protected $NetPrice = null;

    /**
     * @property float $Price
     */
    protected $Price = null;

    /**
     * @property float $Quantity
     */
    protected $Quantity = null;

    /**
     * @property float $TaxAmount
     */
    protected $TaxAmount = null;

    /**
     * @property string $UomId
     */
    protected $UomId = null;

    /**
     * @property string $VariantDescription
     */
    protected $VariantDescription = null;

    /**
     * @property string $VariantId
     */
    protected $VariantId = null;

    /**
     * @param float $Amount
     * @return $this
     */
    public function setAmount($Amount)
    {
        $this->Amount = $Amount;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->Amount;
    }

    /**
     * @param float $DiscountAmount
     * @return $this
     */
    public function setDiscountAmount($DiscountAmount)
    {
        $this->DiscountAmount = $DiscountAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getDiscountAmount()
    {
        return $this->DiscountAmount;
    }

    /**
     * @param float $DiscountPercent
     * @return $this
     */
    public function setDiscountPercent($DiscountPercent)
    {
        $this->DiscountPercent = $DiscountPercent;
        return $this;
    }

    /**
     * @return float
     */
    public function getDiscountPercent()
    {
        return $this->DiscountPercent;
    }

    /**
     * @param string $ItemDescription
     * @return $this
     */
    public function setItemDescription($ItemDescription)
    {
        $this->ItemDescription = $ItemDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getItemDescription()
    {
        return $this->ItemDescription;
    }

    /**
     * @param string $ItemId
     * @return $this
     */
    public function setItemId($ItemId)
    {
        $this->ItemId = $ItemId;
        return $this;
    }

    /**
     * @return string
     */
    public function getItemId()
    {
        return $this->ItemId;
    }

    /**
     * @param string $ItemImageId
     * @return $this
     */
    public function setItemImageId($ItemImageId)
    {
        $this->ItemImageId = $ItemImageId;
        return $this;
    }

    /**
     * @return string
     */
    public function getItemImageId()
    {
        return $this->ItemImageId;
    }

    /**
     * @param int $LineNumber
     * @return $this
     */
    public function setLineNumber($LineNumber)
    {
        $this->LineNumber = $LineNumber;
        return $this;
    }

    /**
     * @return int
     */
    public function getLineNumber()
    {
        return $this->LineNumber;
    }

    /**
     * @param LineType|string $LineType
     * @return $this
     * @throws InvalidEnumException
     */
    public function setLineType($LineType)
    {
        if ( ! $LineType instanceof LineType ) {
            if ( LineType::isValid( $LineType ) )
                $LineType = new LineType( $LineType );
            elseif ( LineType::isValidKey( $LineType ) )
                $LineType = new LineType( constant( "LineType::$LineType" ) );
            elseif ( ! $LineType instanceof LineType )
                throw new InvalidEnumException();
        }
        $this->LineType = $LineType->getValue();

        return $this;
    }

    /**
     * @return LineType
     */
    public function getLineType()
    {
        return $this->LineType;
    }

    /**
     * @param float $NetAmount
     * @return $this
     */
    public function setNetAmount($NetAmount)
    {
        $this->NetAmount = $NetAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getNetAmount()
    {
        return $this->NetAmount;
    }

    /**
     * @param float $NetPrice
     * @return $this
     */
    public function setNetPrice($NetPrice)
    {
        $this->NetPrice = $NetPrice;
        return $this;
    }

    /**
     * @return float
     */
    public function getNetPrice()
    {
        return $this->NetPrice;
    }

    /**
     * @param float $Price
     * @return $this
     */
    public function setPrice($Price)
    {
        $this->Price = $Price;
        return $this;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->Price;
    }

    /**
     * @param float $Quantity
     * @return $this
     */
    public function setQuantity($Quantity)
    {
        $this->Quantity = $Quantity;
        return $this;
    }

    /**
     * @return float
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }

    /**
     * @param float $TaxAmount
     * @return $this
     */
    public function setTaxAmount($TaxAmount)
    {
        $this->TaxAmount = $TaxAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getTaxAmount()
    {
        return $this->TaxAmount;
    }

    /**
     * @param string $UomId
     * @return $this
     */
    public function setUomId($UomId)
    {
        $this->UomId = $UomId;
        return $this;
    }

    /**
     * @return string
     */
    public function getUomId()
    {
        return $this->UomId;
    }

    /**
     * @param string $VariantDescription
     * @return $this
     */
    public function setVariantDescription($VariantDescription)
    {
        $this->VariantDescription = $VariantDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getVariantDescription()
    {
        return $this->VariantDescription;
    }

    /**
     * @param string $VariantId
     * @return $this
     */
    public function setVariantId($VariantId)
    {
        $this->VariantId = $VariantId;
        return $this;
    }

    /**
     * @return string
     */
    public function getVariantId()
    {
        return $this->VariantId;
    }


}

