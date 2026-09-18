<section class="enrol-partner-forms">

    <div class="container enrol-partner-forms__grid">


        <!-- =====================================
             FAMILIES / ENROL FORM
        ====================================== -->

        <article
            class="enrol-form-card"
            id="enrol-form"
        >

            <div class="enrol-form-card__header">

                <img
                    src="<?php echo esc_url(
                        get_template_directory_uri() .
                        '/assets/images/enrol-partner/families.png'
                    ); ?>"
                    alt="Student at Lucy Foundation Schools"
                >

                <div class="enrol-form-card__header-overlay"></div>

                <div class="enrol-form-card__header-content">

                    <p class="enrol-form-card__eyebrow">
                        For Families
                    </p>

                    <h2>
                        Brighter futures<br>
                        start here.
                    </h2>

                    <span
                        class="enrol-form-card__gold-line"
                        aria-hidden="true"
                    ></span>

                    <p>
                        World-class education. Real opportunities.<br>
                        A stronger Zimbabwe.
                    </p>

                </div>

            </div>


            <div class="enrol-form-card__body">

                <form class="enrol-form">

                    <!-- Parent Name -->

                    <div class="enrol-field enrol-field--full">

                        <label for="parent-name">
                            Parent / Guardian Name *
                        </label>

                        <input
                            id="parent-name"
                            type="text"
                            name="parent_name"
                            placeholder="Parent / Guardian Name *"
                            required
                        >

                    </div>


                    <!-- Email -->

                    <div class="enrol-field enrol-field--full">

                        <label for="parent-email">
                            Email Address *
                        </label>

                        <input
                            id="parent-email"
                            type="email"
                            name="email"
                            placeholder="Email Address *"
                            required
                        >

                    </div>


                    <!-- Phone -->

                    <div class="enrol-field enrol-field--full">

                        <label for="parent-phone">
                            Phone / WhatsApp *
                        </label>

                        <input
                            id="parent-phone"
                            type="tel"
                            name="phone"
                            placeholder="Phone / WhatsApp *"
                            required
                        >

                    </div>


                    <!-- Country -->

                    <div class="enrol-field">

                        <label for="family-country">
                            Country of Residence *
                        </label>

                        <select
                            id="family-country"
                            name="country"
                            required
                        >
                            <option value="">
                                Country of Residence *
                            </option>

                            <option value="Zimbabwe">
                                Zimbabwe
                            </option>

                            <option value="South Africa">
                                South Africa
                            </option>

                            <option value="United Kingdom">
                                United Kingdom
                            </option>

                            <option value="Other">
                                Other
                            </option>

                        </select>

                    </div>


                    <!-- Child Name -->

                    <div class="enrol-field">

                        <label for="child-name">
                            Child's Name *
                        </label>

                        <input
                            id="child-name"
                            type="text"
                            name="child_name"
                            placeholder="Child's Name *"
                            required
                        >

                    </div>


                    <!-- Age -->

                    <div class="enrol-field">

                        <label for="child-age">
                            Child Age or Date of Birth *
                        </label>

                        <input
                            id="child-age"
                            type="date"
                            name="child_birth_date"
                            required
                        >

                    </div>


                    <!-- Entry Year -->

                    <div class="enrol-field">

                        <label for="entry-year">
                            Intended Entry Year *
                        </label>

                        <select
                            id="entry-year"
                            name="entry_year"
                            required
                        >

                            <option value="">
                                Intended Entry Year *
                            </option>

                            <option value="2027">
                                2027
                            </option>

                            <option value="2028">
                                2028
                            </option>

                            <option value="2029">
                                2029
                            </option>

                            <option value="2030">
                                2030
                            </option>

                        </select>

                    </div>


                    <!-- Education Level -->

                    <div class="enrol-field enrol-field--full">

                        <label for="education-level">
                            Education Level *
                        </label>

                        <select
                            id="education-level"
                            name="education_level"
                            required
                        >

                            <option value="">
                                Education Level *
                            </option>

                            <option value="Primary">
                                Primary Education
                            </option>

                            <option value="Secondary">
                                Secondary Education
                            </option>

                            <option value="Vocational">
                                Vocational Training
                            </option>

                        </select>

                    </div>


                    <!-- Notes -->

                    <div class="enrol-field enrol-field--full">

                        <label for="family-notes">
                            Additional Notes
                        </label>

                        <textarea
                            id="family-notes"
                            name="notes"
                            rows="5"
                            placeholder="Additional Notes (optional)"
                        ></textarea>

                    </div>


                    <!-- TEMPORARY BUTTON -->

                    <button
                        type="button"
                        class="enrol-form__submit"
                    >
                        Join the Waiting List
                        <span aria-hidden="true">→</span>
                    </button>


                    <p class="enrol-form__footer-text">
                        Be part of a new model of education in Zimbabwe.<br>
                        Register your interest for our upcoming schools.
                    </p>

                </form>

            </div>

        </article>



        <!-- =====================================
             PARTNERS FORM
        ====================================== -->

        <article
            class="enrol-form-card"
            id="partner-form"
        >

            <div class="enrol-form-card__header">

                <img
                    src="<?php echo esc_url(
                        get_template_directory_uri() .
                        '/assets/images/enrol-partner/partners.png'
                    ); ?>"
                    alt="Education partner and student"
                >

                <div class="enrol-form-card__header-overlay"></div>


                <div class="enrol-form-card__header-content">

                    <p class="enrol-form-card__eyebrow">
                        For Partners
                    </p>

                    <h2>
                        Greater impact<br>
                        together.
                    </h2>

                    <span
                        class="enrol-form-card__gold-line"
                        aria-hidden="true"
                    ></span>

                    <p>
                        Partner with us to expand opportunity<br>
                        and transform communities.
                    </p>

                </div>

            </div>


            <div class="enrol-form-card__body">

                <form class="enrol-form">

                    <!-- Full Name -->

                    <div class="enrol-field enrol-field--full">

                        <label for="partner-name">
                            Full Name *
                        </label>

                        <input
                            id="partner-name"
                            type="text"
                            name="name"
                            placeholder="Full Name *"
                            required
                        >

                    </div>


                    <!-- Organisation -->

                    <div class="enrol-field enrol-field--full">

                        <label for="organisation">
                            Organisation *
                        </label>

                        <input
                            id="organisation"
                            type="text"
                            name="organisation"
                            placeholder="Organisation *"
                            required
                        >

                    </div>


                    <!-- Job Title -->

                    <div class="enrol-field enrol-field--full">

                        <label for="job-title">
                            Job Title *
                        </label>

                        <input
                            id="job-title"
                            type="text"
                            name="job_title"
                            placeholder="Job Title *"
                            required
                        >

                    </div>


                    <!-- Email -->

                    <div class="enrol-field enrol-field--full">

                        <label for="partner-email">
                            Email Address *
                        </label>

                        <input
                            id="partner-email"
                            type="email"
                            name="email"
                            placeholder="Email Address *"
                            required
                        >

                    </div>


                    <!-- Country -->

                    <div class="enrol-field enrol-field--full">

                        <label for="partner-country">
                            Country *
                        </label>

                        <select
                            id="partner-country"
                            name="country"
                            required
                        >

                            <option value="">
                                Country *
                            </option>

                            <option value="Zimbabwe">
                                Zimbabwe
                            </option>

                            <option value="South Africa">
                                South Africa
                            </option>

                            <option value="United Kingdom">
                                United Kingdom
                            </option>

                            <option value="Other">
                                Other
                            </option>

                        </select>

                    </div>


                    <!-- Organisation Type -->

                    <div class="enrol-field enrol-field--full">

                        <label for="organisation-type">
                            Organisation Type *
                        </label>

                        <select
                            id="organisation-type"
                            name="organisation_type"
                            required
                        >

                            <option value="">
                                Organisation Type *
                            </option>

                            <option value="Investor">
                                Investor
                            </option>

                            <option value="Corporate">
                                Corporate
                            </option>

                            <option value="Foundation">
                                Foundation
                            </option>

                            <option value="NGO">
                                NGO
                            </option>

                            <option value="Education">
                                Education Organisation
                            </option>

                            <option value="Other">
                                Other
                            </option>

                        </select>

                    </div>


                    <!-- Area of Interest -->

                    <div class="enrol-field enrol-field--full">

                        <label for="area-interest">
                            Area of Interest *
                        </label>

                        <select
                            id="area-interest"
                            name="area_interest"
                            required
                        >

                            <option value="">
                                Area of Interest *
                            </option>

                            <option value="Investment">
                                Investment
                            </option>

                            <option value="Education">
                                Education Partnership
                            </option>

                            <option value="Infrastructure">
                                Infrastructure
                            </option>

                            <option value="Renewable Energy">
                                Renewable Energy
                            </option>

                            <option value="Food Production">
                                Food Production
                            </option>

                            <option value="Vocational Training">
                                Vocational Training
                            </option>

                        </select>

                    </div>


                    <!-- Investment Info -->

                    <label class="enrol-checkbox">

                        <input
                            type="checkbox"
                            name="investment_information"
                            value="yes"
                        >

                        <span>
                            <strong>
                                Request investment information
                            </strong>

                            <small>
                                Receive detailed information about
                                partnership and investment opportunities.
                            </small>
                        </span>

                    </label>


                    <!-- Message -->

                    <div class="enrol-field enrol-field--full">

                        <label for="partner-message">
                            Message
                        </label>

                        <textarea
                            id="partner-message"
                            name="message"
                            rows="4"
                            placeholder="Message (optional)"
                        ></textarea>

                    </div>


                    <button
                        type="button"
                        class="enrol-form__submit"
                    >
                        Partner With Us
                        <span aria-hidden="true">→</span>
                    </button>


                    <p class="enrol-form__footer-text">
                        Let's build a brighter Zimbabwe, together.
                    </p>

                </form>

            </div>

        </article>

    </div>

</section>