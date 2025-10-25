● Lista degli Endpoints API

  Tutti gli endpoint sono prefissati con /api (standard Laravel). Ecco la lista completa:

  Marchi (/api/marchi)

  - GET /api/marchi - Lista tutti i marchi
  - POST /api/marchi - Crea un nuovo marchio
  - GET /api/marchi/{id} - Mostra un marchio specifico
  - PUT/PATCH /api/marchi/{id} - Aggiorna un marchio
  - DELETE /api/marchi/{id} - Elimina un marchio

  Referenti (/api/referenti)

  - GET /api/referenti - Lista tutti i referenti
  - POST /api/referenti - Crea un nuovo referente
  - GET /api/referenti/{id} - Mostra un referente specifico
  - PUT/PATCH /api/referenti/{id} - Aggiorna un referente
  - DELETE /api/referenti/{id} - Elimina un referente

  Pavimenti/Rivestimenti/Battiscopa (/api/pavimenti-rivestimenti-battiscopa)

  - GET /api/pavimenti-rivestimenti-battiscopa - Lista tutti
  - POST /api/pavimenti-rivestimenti-battiscopa - Crea nuovo
  - GET /api/pavimenti-rivestimenti-battiscopa/{id} - Mostra specifico
  - PUT/PATCH /api/pavimenti-rivestimenti-battiscopa/{id} - Aggiorna
  - DELETE /api/pavimenti-rivestimenti-battiscopa/{id} - Elimina

  Stufe (/api/stufe)

  - GET /api/stufe - Lista tutte le stufe
  - POST /api/stufe - Crea una nuova stufa
  - GET /api/stufe/{id} - Mostra una stufa specifica
  - PUT/PATCH /api/stufe/{id} - Aggiorna una stufa
  - DELETE /api/stufe/{id} - Elimina una stufa

  Sanitari (/api/sanitari)

  - GET /api/sanitari - Lista tutti i sanitari
  - POST /api/sanitari - Crea un nuovo sanitario
  - GET /api/sanitari/{id} - Mostra un sanitario specifico
  - PUT/PATCH /api/sanitari/{id} - Aggiorna un sanitario
  - DELETE /api/sanitari/{id} - Elimina un sanitario

  Rubinetterie (/api/rubinetterie)

  - GET /api/rubinetterie - Lista tutte le rubinetterie
  - POST /api/rubinetterie - Crea una nuova rubinetteria
  - GET /api/rubinetterie/{id} - Mostra una rubinetteria specifica
  - PUT/PATCH /api/rubinetterie/{id} - Aggiorna una rubinetteria
  - DELETE /api/rubinetterie/{id} - Elimina una rubinetteria

  Complementi d'Arredo (/api/complementi-arredo)

  - GET /api/complementi-arredo - Lista tutti
  - POST /api/complementi-arredo - Crea nuovo
  - GET /api/complementi-arredo/{id} - Mostra specifico
  - PUT/PATCH /api/complementi-arredo/{id} - Aggiorna
  - DELETE /api/complementi-arredo/{id} - Elimina

  Illuminazione (/api/illuminazione)

  - GET /api/illuminazione - Lista tutti
  - POST /api/illuminazione - Crea nuovo
  - GET /api/illuminazione/{id} - Mostra specifico
  - PUT/PATCH /api/illuminazione/{id} - Aggiorna
  - DELETE /api/illuminazione/{id} - Elimina

  Termoarredi (/api/termoarredi)

  - GET /api/termoarredi - Lista tutti i termoarredi
  - POST /api/termoarredi - Crea un nuovo termoarredo
  - GET /api/termoarredi/{id} - Mostra un termoarredo specifico
  - PUT/PATCH /api/termoarredi/{id} - Aggiorna un termoarredo
  - DELETE /api/termoarredi/{id} - Elimina un termoarredo

  Box Doccia (/api/box-doccia)

  - GET /api/box-doccia - Lista tutti i box doccia
  - POST /api/box-doccia - Crea un nuovo box doccia
  - GET /api/box-doccia/{id} - Mostra un box doccia specifico
  - PUT/PATCH /api/box-doccia/{id} - Aggiorna un box doccia
  - DELETE /api/box-doccia/{id} - Elimina un box doccia

  ---
  Note:
  - Tutti gli endpoint sono definiti in routes/api.php:15-24
  - Ogni risorsa usa apiResource che genera automaticamente i 5 endpoint CRUD standard
  - Il prefisso /api è aggiunto automaticamente da Laravel