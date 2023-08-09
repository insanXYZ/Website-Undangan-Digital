<form wire:submit.prevent="store" class="formStore">
    <input wire:model="nama" type="text" placeholder="Nama anda">
    <textarea wire:model="body" placeholder="Berikan ucapan atau do'a" maxlength="255"></textarea>
    <div wire:ignore>
        <select wire:model="status" id="status">
            <option value="hadir">Hadir</option>
            <option value="tidak">Tidak hadir</option>
        </select>
    </div>
    <button type="submit" class="buttonSubmit">kirim</button>
</form>