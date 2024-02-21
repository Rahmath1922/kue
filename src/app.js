document.addEventListener('alpine:init', () => {
    Alpine.data('products', () => ({
        items: [
            { id: 1, name: 'Coklat', img: '1.jpg', price: 10000 },
            { id: 2, name: 'Strawberry', img: '2.jpg', price: 10000 },
            { id: 3, name: 'Tiramisu', img: '3.jpg', price: 10000 },
            { id: 4, name: 'Milo', img: '4.jpg', price: 10000 },
            { id: 5, name: 'Keju', img: '5.jpg', price: 10000 },
            { id: 6, name: 'Taro', img: '6.jpg', price: 10000 }
        ],
    }));

    feather.replace();

    // Menambahkan event listener untuk setiap icon "eye"
    document.querySelectorAll('.product-stars a').forEach(item => {
        item.addEventListener('click', event => {
            // Dapatkan ID modal yang sesuai
            const modalId = item.getAttribute('id').replace('open-modal', '');
            // Tampilkan kembali modal yang sesuai
            const modal = document.getElementById(`item-detail-modal${modalId}`);
            modal.style.display = 'block';
        });
    });

    Alpine.store('cart', {
        items: [],
        total: 0,
        quantity: 0,
        add(newItem) {
            //apakah ada barang yang sama
            const cartItem = this.items.find((item) => item.id === newItem.id);

            //jika belum ada/ cart masih kosong
            if (!cartItem) {
                this.items.push({ ...newItem, quantity: 1, total: newItem.price });
                this.quantity++;
                this.total += newItem.price;
            } else {
                //jika barang sudah ada,cek apakah barang beda atau sama
                this.items = this.items.map((item) => {
                    if (item.id !== newItem.id) {
                        return item;
                    } else {
                        //jika barang sudah ada maka akan nambah
                        item.quantity++;
                        item.total = item.price * item.quantity;
                        this.quantity++;
                        this.total += item.price;
                        return item;
                    }
                })
            }
        },
        remove(id) {
            //ambil item yang mau diremove
            const cartItem = this.items.find((item) => item.id === id);

            //jika item lebih dari satu
            if (cartItem.quantity > 1) {
                //telusuri
                this.items = this.items.map((item) => {
                    if (item.id !== id) {
                        return item;
                    } else {
                        item.quantity--;
                        item.total = item.price * item.quantity;
                        this.quantity--;
                        this.total -= item.price;
                        return item;
                    }
                })
            } else if (cartItem.quantity === 1) {
                this.items = this.items.filter((item) => item.id !== id);
                this.quantity--;
                this.total -= cartItem.price;
            }
        },
    });
});




//konversi ke rupiah
const rupiah = (number) => {
    return new Intl.NumberFormat('id-ID', {
        style: 'currency',
        currency: 'IDR',
        minimumFractionDigits: 0,
    }).format(number);
};


//form validasi
const checkoutButton = document.querySelector('.checkout-button');
checkoutButton.disabled = true;

const form = document.querySelector('#checkoutForm');

form.addEventListener('keyup', function () {
    for (let i = 0; i < form.elements.length; i++) {
        if (form.elements[i].value.length !== 0) {
            checkoutButton.classList.remove('disabled');
            checkoutButton.classList.add('disabled');
        } else {
            return false;
        }
    }
    checkoutButton.disabled = false;
    checkoutButton.classList.remove('disabled');
});


//kirim data
checkoutButton.addEventListener('click', async function (e) {
    e.preventDefault();
    const formData = new FormData(form);
    const data = new URLSearchParams(formData);
    const objData = Object.fromEntries(data);
    const message = formatMessage(objData);
    window.open('http://wa.me/6282269474548?text=' + encodeURIComponent(message));

    //token menggunakan ajak / fetch

});

//Format pesan wa
const formatMessage = (obj) => {
    const customerData = `Data Customer\n\nNama: ${obj.name}\nEmail: ${obj.email}\nNo HP: ${obj.phone}`;

    const orderData = `Data Pesanan\n${JSON.parse(obj.items).map((item) => `${item.name} (${item.quantity} x ${rupiah(item.total)})`).join('\n')}`;

    const total = `**TOTAL: ${rupiah(obj.total)}**`;

    return `${customerData}\n\n${orderData}\n\n${total}\n\nTerima kasih.`;
};