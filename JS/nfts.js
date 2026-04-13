class NFT {
    constructor(id, name, price, image) {
        this.id = id;
        this.name = name;
        this.price = price;
        this.image = image;
    }
}

const nfts = [
    new NFT(0, "Crypto Funk #1", 0.5, "Assets/imgs/nft1.avif"),
    new NFT(1, "Crypto Funk #2", 0.75, "Assets/imgs/nft2.avif"),
    new NFT(2, "Crypto Funk #3", 1.0, "Assets/imgs/nft3.avif"),
    new NFT(3, "Crypto Funk #4", 1.25, "Assets/imgs/nft4.avif"),
    new NFT(4, "Crypto Funk #5", 1.25, "Assets/imgs/nft5.avif"),
    new NFT(5, "Crypto Funk #6", 1.25, "Assets/imgs/nft6.avif"),
    new NFT(6, "Crypto Funk #7", 1.25, "Assets/imgs/nft7.avif"),
    new NFT(7, "Crypto Funk #8", 1.25, "Assets/imgs/nft8.avif"),
];

console.log(nfts);

function displayNFTs() {
    const nftContainer = document.getElementsByClassName('grid')[0];
    nfts.forEach(nft => { 
        const nftElement = document.createElement('div');
        nftElement.classList.add('card');
        nftElement.innerHTML = `
            <img class="card-img" src="${nft.image}" alt="${nft.name}">
            <div class="card-info">
                <h3>${nft.name}</h3>
                <p>Price: ${nft.price} ETH</p>
            </div>
        `;
        nftContainer.appendChild(nftElement);
    });
}