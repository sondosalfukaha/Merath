<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Shop Collection</title>
  <style>
    body {
      font-family: sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f9f9f9;
    }

    .container {
      max-width: 1200px;
      margin: auto;
      padding: 0 1rem;
    }

    .shop-header {
      background-color: #f3f4f6;
      padding: 3rem 0;
      text-align: center;
    }

    .shop-header h1 {
      font-size: 2.5rem;
      font-weight: bold;
    }

    .shop-wrapper {
      display: flex;
      flex-direction: column;
      gap: 2rem;
      padding: 2rem 0;
    }

    @media (min-width: 768px) {
      .shop-wrapper {
        flex-direction: row;
      }
    }

    .sidebar {
      width: 260px;
      flex-shrink: 0;
      display: none;
    }

    @media (min-width: 768px) {
      .sidebar {
        display: block;
      }
    }

    .filter-header {
      font-size: 1.25rem;
      font-weight: 600;
      margin-bottom: 1rem;
    }

    .filter-group {
      margin-bottom: 2rem;
    }

    .product-section {
      flex: 1;
    }

    .top-controls {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 1.5rem;
    }

    .sort-dropdown {
      position: relative;
    }

    .sort-menu {
      display: none;
      position: absolute;
      right: 0;
      background: white;
      border: 1px solid #ddd;
      box-shadow: 0 4px 8px rgba(0,0,0,0.05);
      z-index: 10;
    }

    .sort-menu.active {
      display: block;
    }

    .sort-menu button {
      width: 100%;
      text-align: left;
      padding: 0.75rem 1rem;
      border: none;
      background: none;
      cursor: pointer;
    }

    .grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 1.5rem;
    }

    .product-card {
      background: white;
      padding: 1rem;
      border: 1px solid #ddd;
      text-align: center;
    }

    /* Mobile Filters */
    .mobile-filters {
      display: none;
      padding: 1rem;
    }

    .filter-toggle-btn {
      background: none;
      border: 1px solid #ccc;
      padding: 0.5rem 1rem;
      cursor: pointer;
    }

    @media (max-width: 767px) {
      .mobile-filters {
        display: block;
      }
    }

    .hidden {
      display: none;
    }
  </style>
</head>
<body>
  <div class="shop-header">
    <div class="container">
      <h1>Shop Collection</h1>
    </div>
  </div>

  <div class="container shop-wrapper">
    <!-- Sidebar -->
    <aside class="sidebar" id="filterSidebar">
      <div class="filter-group">
        <div class="filter-header">Categories</div>
        <label><input type="checkbox" class="filter-category" value="Shirts" /> Shirts</label><br/>
        <label><input type="checkbox" class="filter-category" value="Shoes" /> Shoes</label>
      </div>

      <div class="filter-group">
        <div class="filter-header">Materials</div>
        <label><input type="checkbox" class="filter-material" value="Cotton" /> Cotton</label><br/>
        <label><input type="checkbox" class="filter-material" value="Leather" /> Leather</label>
      </div>

      <div class="filter-group">
        <div class="filter-header">Price Range</div>
        <input type="range" id="priceMin" min="0" max="1000" value="0"/>
        <input type="range" id="priceMax" min="0" max="1000" value="1000"/>
        <p>$<span id="minPriceLabel">0</span> - $<span id="maxPriceLabel">1000</span></p>
      </div>
    </aside>

    <!-- Main Content -->
    <main class="product-section">
      <div class="mobile-filters">
        <button class="filter-toggle-btn" onclick="toggleMobileFilters()">Show Filters</button>
        <div id="mobileFilterContent" class="hidden">
          <!-- Filter HTML can be cloned from Sidebar -->
        </div>
      </div>

      <div class="top-controls">
        <p><span id="productCount">0</span> products</p>
        <div class="sort-dropdown">
          <button onclick="toggleSortMenu()">Sort By</button>
          <div class="sort-menu" id="sortMenu">
            <button onclick="sortProducts('newest')">Newest</button>
            <button onclick="sortProducts('price-low-high')">Price: Low to High</button>
            <button onclick="sortProducts('price-high-low')">Price: High to Low</button>
            <button onclick="sortProducts('popularity')">Popularity</button>
          </div>
        </div>
      </div>

      <div class="grid" id="productGrid">
        <!-- Products will be injected here -->
      </div>
    </main>
  </div>

  <script>
    const sampleProducts = [
      { id: 1, name: 'Leather Jacket', category: 'Shirts', material: 'Leather', price: 200 },
      { id: 2, name: 'Cotton Shirt', category: 'Shirts', material: 'Cotton', price: 50 },
      { id: 3, name: 'Sneakers', category: 'Shoes', material: 'Leather', price: 120 },
    ];

    function renderProducts(products) {
      const grid = document.getElementById('productGrid');
      grid.innerHTML = '';

      products.forEach(product => {
        const card = document.createElement('div');
        card.className = 'product-card';
        card.innerHTML = `<h3>${product.name}</h3><p>$${product.price}</p>`;
        grid.appendChild(card);
      });

      document.getElementById('productCount').innerText = products.length;
    }

    function toggleSortMenu() {
      document.getElementById('sortMenu').classList.toggle('active');
    }

    function toggleMobileFilters() {
      document.getElementById('mobileFilterContent').classList.toggle('hidden');
    }

    function sortProducts(type) {
      let sorted = [...sampleProducts];
      if (type === 'price-low-high') {
        sorted.sort((a, b) => a.price - b.price);
      } else if (type === 'price-high-low') {
        sorted.sort((a, b) => b.price - a.price);
      } else if (type === 'newest') {
        sorted.reverse(); // assuming newest is last
      }
      renderProducts(sorted);
      toggleSortMenu();
    }

    window.onload = () => {
      renderProducts(sampleProducts);
      document.getElementById('priceMin').addEventListener('input', (e) => {
        document.getElementById('minPriceLabel').innerText = e.target.value;
      });

      document.getElementById('priceMax').addEventListener('input', (e) => {
        document.getElementById('maxPriceLabel').innerText = e.target.value;
      });
    };
  </script>
</body>
</html>
