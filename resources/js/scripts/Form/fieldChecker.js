export default {
  methods : {

      checkPersonalDetailsFields()
      {
        if(
            this.form.first_name == null ||
            this.form.last_name == null ||
            this.form.email == null ||
            this.form.mobile_number == null ||
            this.form.sex == null ||
            this.form.birthdate == null ||
            this.form.country == null ||
            this.form.complete_address == null ||
            this.form.barangay == null ||
            this.form.city == null ||
            this.form.province == null ||
            this.form.postal_code == null
          )
        {
          this.personalDetailsHasError = true;
        }
      },


      checkQuestionsField()
      {
        if(
            this.form.question_5 == null ||
            this.form.question_6 == null ||
            this.form.question_7 == null ||
            this.form.question_8 == null ||
            this.form.question_9 == null 
            // this.form.attachment.resume == null
          )
        {
          this.questionsHasError = true;
        }
      },

      // checkDocumentsUploadField()
      // {
      //   if(
      //       this.form.attachment_front_image == null ||
      //       this.form.attachment_back_image == null ||
      //       this.form.attachment_selfie_image == null
      //     )
      //   {
      //     this.documentsUploadHasError = true;
      //   }
      // }


  }

}

