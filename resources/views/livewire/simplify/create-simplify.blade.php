<form wire:submit.prevent="store">
        <input wire:model="nama" type="text" placeholder="Nama anda" >
        <textarea wire:model="body" placeholder="Berikan ucapan atau do'a" maxlength="255"></textarea>
            <select wire:model="status" id="status" name="status">
                <option value="Hadir">Hadir</option>
                <option value="Tidak hadir">Tidak hadir</option>
            </select>
        <button type="submit" id="btn-submit">Kirim</button>
</form>
