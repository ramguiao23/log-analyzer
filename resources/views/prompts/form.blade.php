<div>
    <label>Key</label><br>
    <input type="text" name="key" value="{{ old('key', $prompt->key ?? '') }}" required><br><br>

    <label>System Prompt</label><br>
    <textarea name="system">{{ old('system', $prompt->system ?? '') }}</textarea><br><br>

    <label>User Prompt</label><br>
    <textarea name="user" required>{{ old('user', $prompt->user ?? '') }}</textarea>
</div>
