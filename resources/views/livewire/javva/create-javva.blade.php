<form wire:submit.prevent="store" class="formInput">
    <input wire:model="nama" type="text" placeholder="Nama anda">
    <textarea wire:model="body" id="body" placeholder="Masukkan pesan anda"></textarea>
    <select wire:model="status" id="status">
        <option value="hadir">Hadir</option>
        <option value="tidak">Tidak hadir</option>
    </select>
    <button type="submit" class="button">Kirim</button>
</form>