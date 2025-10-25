import os

# Inserisci qui il percorso della cartella con le immagini
cartella = r"C:\PROGETTI IT CONSULTING\PALLINO-V3-BackEnd\storage\app\public\SANITARI_Images"  # <-- cambia questo

# Estensioni di file immagini da considerare
estensioni = ('.jpg', '.jpeg', '.png', '.webp', '.tiff', '.bmp')

for nome_file in os.listdir(cartella):
    if nome_file.lower().endswith(estensioni):
        nome_vecchio = os.path.join(cartella, nome_file)
        nome_senza_estensione, estensione = os.path.splitext(nome_file)

        # Tronca al primo punto
        nuovo_nome_base = nome_senza_estensione.split('.')[0].strip()
        nuovo_nome = os.path.join(cartella, nuovo_nome_base + estensione)

        # Evita conflitti di nomi duplicati
        if nome_vecchio != nuovo_nome:
            os.rename(nome_vecchio, nuovo_nome)
            print(f"Rinominato: {nome_file} -> {os.path.basename(nuovo_nome)}")

print("✅ Rinomina completata!")
