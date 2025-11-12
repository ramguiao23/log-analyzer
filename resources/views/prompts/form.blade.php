<div class="form-group">
    <label for="key">Key</label>
    <input type="text" class="form-control" id="key" name="key" value="{{ old('key', $prompt->key ?? '') }}" required>
</div>

<div class="form-group">
    <label for="system">System Prompt</label>
    <textarea class="form-control" id="system" name="system" rows="3">{{ old('system', $prompt->system ?? '') }}</textarea>
</div>

<div class="form-group">
    <label for="user">User Prompt</label>
    <textarea class="form-control" id="user" name="user" rows="3" required>{{ old('user', $prompt->user ?? '') }}</textarea>
</div>
