<div class="container-filter">
    <!-- Botón para mostrar/ocultar el filtro -->
    <button class="filter-toggle" onclick="toggleFilter()">
        <i class="fa-solid fa-bars"></i>
    </button>

    <div class="filter">
        <h3>CATEGORIAS</h3>
        <hr>
        <ul>
            <li><a href="/accessories">ACCESORIOS</a></li>
            <li><a href="/audio">AUDIO</a></li>
            <li><a href="/computer">COMPUTADORAS</a></li>
            <li><a href="/components">COMPONENTES</a></li>
            <li><a href="/storage">ALMACENAMIENTO</a></li>
            <li><a href="/monitors">MONITORES</a></li>
            <li><a href="/energy">ENERGIA</a></li>
            <li><a href="/consumables">CONSUMIBLES</a></li>
        </ul>

        <div class="range-container">
            <p>Rango</p>
            <span id="valor">$0-99999</span>
        </div>
        <div class="range">
            <input type="range" id="rango" name="rango" min="0" max="99999" value="0">
        </div>

        <div class="check-list">
            <h4 class="check-tittle">Marcas</h4>
            <div class="box-msi">
                <input type="checkbox" id="check_msi" class="checkbox-msi">
                <label for="check_msi" class="checkbox-label">MSI</label>
            </div>
            <div class="asus">
                <input type="checkbox" id="check-asus" class="checkbox-asus">
                <label for="check-asus" class="checkbox-label">ASUS</label>
            </div>
            <div class="box-amd">
                <input type="checkbox" id="check_amd" class="checkbox-amd">
                <label for="check_amd" class="checkbox-label">AMD</label>
            </div>
            <div class="box-intel">
                <input type="checkbox" id="check_intel" class="checkbox-intel">
                <label for="check_intel" class="checkbox-label">INTEL</label>
            </div>
            <div class="lg">
                <input type="checkbox" id="check-lg" class="checkbox-lg">
                <label for="check-lg" class="checkbox-label">LG</label>
            </div>
            <div class="samsung">
                <input type="checkbox" id="check-samsung" class="checkbox-samsung">
                <label for="check-samsung" class="checkbox-label">SAMSUNG</label>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('js/categories.js') }}"></script>