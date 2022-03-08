export default {
	methods:{
        nextStep(action,step,step_count,next_step)
        {
          if(this.step == 'personal_details' && action == 'next')
          {
            this.checkPersonalDetailsFields();

            if(this.personalDetailsHasError == true)
            {
                   this.$notify({
                    title: "Check required fields",
                    type: 'error',
                    text: 'Please check all the required fields.'
                })
            }
            else
            {
              this.step = step;
              this.step_count = step_count;
              this.next_step = next_step;
              console.log(this.step)
              window.scrollTo(0,0);
            }
          }

          if(this.step == 'questions' && action == 'back')
          {
              this.step = step;
              this.step_count = step_count;
              console.log(this.step)
              window.scrollTo(0,0);
          }

          if(this.step == 'questions' && step != 'questions' && action == 'next')
          {
            this.checkQuestionsField();

            if(this.questionsHasError == true)
            {
                this.$notify({
                    title: "Check required fields",
                    type: 'error',
                    text: 'Please check all the required fields.'
                })
            }
            else
            {
              this.step = step;
              this.step_count = step_count;
              this.next_step = next_step;
              console.log(this.step)
              window.scrollTo(0,0);
            }
          }


          if(this.step == 'document_upload' && action == 'back')
          {
              this.step = step;
              this.step_count = step_count;
              console.log(this.step)
              window.scrollTo(0,0);
          }

          // if(this.step == 'document_upload' && step != 'document_upload' && action == 'next')
          // {
          //   this.checkDocumentsUploadField();

          //   if(this.documentsUploadHasError == true)
          //   {
          //       this.$notify({
          //           title: "Check required fields",
          //           type: 'error',
          //           text: 'Please check all the required fields.'
          //       })
          //   }
          //   else
          //   {
          //     this.step = step;
          //     this.step_count = step_count;
          //     this.next_step = next_step;
          //     console.log(this.step)
          //     window.scrollTo(0,0);
          //   }
          // }


          if(this.step == 'review' && action == 'back')
          {
              this.step = step;
              this.step_count = step_count;
              console.log(this.step)
              window.scrollTo(0,0);
          }

        },
	}
}