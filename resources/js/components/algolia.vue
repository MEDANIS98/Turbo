<template>
  <ais-instant-search :search-client="searchClient" index-name="parts_index"></ais-instant-search>
</template>

<script>
import algoliasearch from "algoliasearch/lite";

export default {
  data() {
    return {
      searchClient: algoliasearch(
        "3W1YKTWP94",
        "df1b7898727e456a094ccac34d855246"
      )
    };
  }
};
</script>
