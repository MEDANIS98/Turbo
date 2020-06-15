<template>
  <form class="search__body">
    <div class="search__shadow"></div>
    <input class="search__input" type="text" :placeholder="$t('Enter Keyword or Part Number')" />
    <button class="search__button search__button--start" type="button">
      <span class="search__button-icon">
        <svg-car></svg-car>
      </span>
      <span class="search__button-title">{{ $t('Select Vehicle') }}</span>
    </button>
    <button class="search__button search__button--end" type="submit">
      <span class="search__button-icon">
        <svg-magnifier></svg-magnifier>
      </span>
    </button>
    <div class="search__box"></div>
    <div class="search__decor">
      <div class="search__decor-start"></div>
      <div class="search__decor-end"></div>
    </div>
    <div class="search__dropdown search__dropdown--suggestions suggestions">
      <div class="suggestions__group">
        <div class="suggestions__group-title">{{ $t('Products') }}</div>
        <div class="suggestions__group-content" id="hits"></div>
      </div>
      <div class="suggestions__group">
        <div class="suggestions__group-title">{{ $t('Categories')}}</div>
        <div class="suggestions__group-content">
          <a class="suggestions__item suggestions__category" href="#">Headlights & Lighting</a>
        </div>
      </div>
      <div id="powered-by" style="float: right;padding-right: 10px;"></div>
    </div>
    <div class="search__dropdown search__dropdown--vehicle-picker vehicle-picker">
      <div class="search__dropdown-arrow"></div>
      <div
        class="vehicle-picker__panel vehicle-picker__panel--list vehicle-picker__panel--active"
        data-panel="list"
      >
        <div class="vehicle-picker__panel-body">
          <div class="vehicle-picker__text">{{ $t('Select a vehicle to find exact fit parts') }}</div>
          <div class="vehicles-list">
            <div class="vehicles-list__body">
              <label class="vehicles-list__item">
                <span class="vehicles-list__item-radio input-radio">
                  <span class="input-radio__body">
                    <input class="input-radio__input" name="header-vehicle" type="radio" />
                    <span class="input-radio__circle"></span>
                  </span>
                </span>
                <span class="vehicles-list__item-info">
                  <span class="vehicles-list__item-name">2011 Ford Focus S</span>
                  <span class="vehicles-list__item-details">Engine 2.0L 1742DA L4 FI Turbo</span>
                </span>
                <button type="button" class="vehicles-list__item-remove">
                  <svg-trash></svg-trash>
                </button>
              </label>
              <label class="vehicles-list__item">
                <span class="vehicles-list__item-radio input-radio">
                  <span class="input-radio__body">
                    <input class="input-radio__input" name="header-vehicle" type="radio" />
                    <span class="input-radio__circle"></span>
                  </span>
                </span>
                <span class="vehicles-list__item-info">
                  <span class="vehicles-list__item-name">2019 Audi Q7 Premium</span>
                  <span class="vehicles-list__item-details">Engine 3.0L 5626CC L6 QK</span>
                </span>
                <button type="button" class="vehicles-list__item-remove">
                  <svg-trash></svg-trash>
                </button>
              </label>
            </div>
          </div>
          <div class="vehicle-picker__actions">
            <button type="button" class="btn btn-primary btn-sm" data-to-panel="form">Add A Vehicle</button>
          </div>
        </div>
      </div>
      <div class="vehicle-picker__panel vehicle-picker__panel--form" data-panel="form">
        <div class="vehicle-picker__panel-body">
          <div class="vehicle-form vehicle-form--layout--search">
            <div class="vehicle-form__item vehicle-form__item--select">
              <select class="form-control form-control-select2" aria-label="Year">
                <option value="none">Select Year</option>
                <option>2010</option>
                <option>2011</option>
                <option>2012</option>
                <option>2013</option>
                <option>2014</option>
                <option>2015</option>
                <option>2016</option>
                <option>2017</option>
                <option>2018</option>
                <option>2019</option>
                <option>2020</option>
              </select>
            </div>
            <div class="vehicle-form__item vehicle-form__item--select">
              <select
                class="form-control form-control-select2"
                aria-label="Brand"
                disabled="disabled"
              >
                <option value="none">Select Brand</option>
                <option>Audi</option>
                <option>BMW</option>
                <option>Ferrari</option>
                <option>Ford</option>
                <option>KIA</option>
                <option>Nissan</option>
                <option>Tesla</option>
                <option>Toyota</option>
              </select>
            </div>
            <div class="vehicle-form__item vehicle-form__item--select">
              <select
                class="form-control form-control-select2"
                aria-label="Model"
                disabled="disabled"
              >
                <option value="none">Select Model</option>
                <option>Explorer</option>
                <option>Focus S</option>
                <option>Fusion SE</option>
                <option>Mustang</option>
              </select>
            </div>
            <div class="vehicle-form__item vehicle-form__item--select">
              <select
                class="form-control form-control-select2"
                aria-label="Engine"
                disabled="disabled"
              >
                <option value="none">Select Engine</option>
                <option>Gas 1.6L 125 hp AT/L4</option>
                <option>Diesel 2.5L 200 hp AT/L5</option>
                <option>Diesel 3.0L 250 hp MT/L5</option>
              </select>
            </div>
            <div class="vehicle-form__divider">Or</div>
            <div class="vehicle-form__item">
              <input
                type="text"
                class="form-control"
                placeholder="Enter VIN number"
                aria-label="VIN number"
              />
            </div>
          </div>
          <div class="vehicle-picker__actions">
            <div class="search__car-selector-link">
              <a href="#" data-to-panel="list">Back to vehicles list</a>
            </div>
            <button type="button" class="btn btn-primary btn-sm" disabled="disabled">Add A Vehicle</button>
          </div>
        </div>
      </div>
    </div>
  </form>
</template>

<script>
export default {
  data() {
    return {
      query: ""
    };
  }
};
</script>
