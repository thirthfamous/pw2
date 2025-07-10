#!/bin/bash

# Ganti direktori ke folder pw2
cd "./" || exit

# Nama output
output="combined.md"

# Kosongkan file jika sudah ada
> "$output"

# Loop dari pertemuan-01 sampai pertemuan-12
for i in {1..12}; do
    folder=$(printf "pertemuan-%02d" "$i")
    filepath="$folder/README.md"

    if [ -f "$filepath" ]; then
        echo -e "\n" >> "$output"
        cat "$filepath" >> "$output"
    else
        echo "README.md not found in $folder, skipping..."
    fi
done

echo "✅ File berhasil digabung: $output"
