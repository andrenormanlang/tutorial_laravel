<form action="" method="">
    <h2>Add a Professional</h2>

    <!-- Name -->
    <label for="name">Name:</label>
    <input
      type="text"
      id="name"
      name="name"
      value="{{ old('name') }}"
      required
    >

    <!-- Skill -->
    <label for="skill">Skill</label>
    <input
      type="text"
      id="skill"
      name="skill"
      required
    >

    <!--  Bio -->
    <label for="bio">Biography:</label>
    <textarea
      rows="5"
      id="bio"
      name="bio"
      required
    ></textarea>

    <!-- select a sector -->
    <label for="dojo_id">Sector:</label>
    <select id="category_id" name="category_id" required>
      <option value="" disabled selected>Sector</option>

    </select>

    <button type="submit" class="btn mt-4">Add</button>

    <!-- validation errors -->

  </form>
