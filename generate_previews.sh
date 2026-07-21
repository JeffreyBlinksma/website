#!/bin/bash

INPUT_DIR="./img"
OUTPUT_DIR="./preview"

mkdir -p "$OUTPUT_DIR"

# Widths to generate
WIDTHS=(
    106
    133
    159
    186
    212
    233
    239
    265
    292
    318
    350
    371
    408
    424
    476
    525
    538
    700
    817
    933
)

shopt -s nullglob

for img in "$INPUT_DIR"/*.{webp,WEBP}; do
    filename="$(basename "$img")"
    filename="${filename%.*}"

    echo "$filename"

    for width in "${WIDTHS[@]}"; do
        output="${OUTPUT_DIR}/${filename}_${width}px.webp"

        # Skip if already exists
        [[ -f "$output" ]] && continue

        magick "$img" \
            -resize "${width}x>" \
            -strip \
            -quality 75 \
            "$output"

        echo "    - ${width}px"
    done
done
