<?php
function SchemaMarkup($shema) {
    return json_encode($shema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES, 10);
}