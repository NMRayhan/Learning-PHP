let cart = [
    { product: "Laptop", price: 60000, quantity: 1 },
    { product: "watch", price: 2000, quantity: 2 },
    { product: "shirt", price: 500, quantity: 5 },
    { product: "pen", price: 5, quantity: 20 },
]

function cartCalculation(products) {
    let total = 0
    for (const product of products) {
        const productTotal = product.price * product.quantity;
        total = total + productTotal;
    }
    return total;
}

document.getElementById("demo").innerHTML = "Sum of Product : " + cartCalculation(cart);