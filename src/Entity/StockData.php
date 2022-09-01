<?php

namespace BajomoDavid\ProductInventoryBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="BajomoDavid\ProductInventoryBundle\Repository\StockDataRepository")
 * @ORM\Table(name="bajomodavid_product_inventory_stock_data")
 */
class StockData
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $sku;
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $branch;
    /**
     * @ORM\Column(type="integer")
     */
    private $stock;

    public function setStock(int $count): self
    {
        $this->stock = $count;
        return $this;
    }

    public function setSku(string $sku): self
    {
        $this->sku = $sku;
        return $this;
    }

    public function setBranch(int $branch): self
    {
        $this->branch = $branch;
        return $this;
    }

    public function decrementStock(): self
    {
        $this->stock--;
        return $this;
    }

    public function incrementStock(): self
    {
        $this->stock++;
        return $this;
    }

    public function getStock(): ?int
    {
        return $this->stock;
    }

    public function getBranch(): ?string
    {
        return $this->branch;
    }

    public function getSku(): ?string
    {
        return $this->sku;
    }
}

