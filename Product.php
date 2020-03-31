<?php


class Product
{
    private int $id;
    private string $title;
    private float $price;
    private int $availableQuantity;

    // TODO Generate constructor with all properties of the class
    // TODO Generate getters and setters of properties

    /**
     * Add Product $product into cart. If product already exists inside cart
     * it must update quantity.
     * This must create CartItem and return CartItem from method
     * Bonus: $quantity must not become more than whatever
     * is $availableQuantity of the Product
     *
     * @param Cart $cart
     * @param int $quantity
     * @return void
     * @return CartItem
     */
    public function addToCart(Cart $cart, int $quantity)
    {
        //TODO Implement method
    }

    /**
     * Remove product from cart
     *
     * @param Product $product
     */
    public function removeFromCart(Product $product)
    {
        //TODO Implement method
    }
}