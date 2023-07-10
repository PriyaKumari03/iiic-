document.getElementById('policyQuestion').addEventListener('change', function() {
    var policyLinkContainer = document.getElementById('policyLinkContainer');
    if (this.value === 'Yes') {
      policyLinkContainer.classList.remove('hidden');
    } else {
      policyLinkContainer.classList.add('hidden');
    }
  });
  
  document.getElementById('procedureQuestion').addEventListener('change', function() {
    var procedureLinkContainer = document.getElementById('procedureLinkContainer');
    if (this.value === 'Yes') {
      procedureLinkContainer.classList.remove('hidden');
    } else {
      procedureLinkContainer.classList.add('hidden');
    }
  });
  
  document.getElementById('valueChainQuestion').addEventListener('change', function() {
    var valueChainLinkContainer = document.getElementById('valueChainLinkContainer');
    if (this.value === 'Yes') {
      valueChainLinkContainer.classList.remove('hidden');
    } else {
      valueChainLinkContainer.classList.add('hidden');
    }
  });
  
  document.getElementById('standardsQuestion').addEventListener('input', function() {
    var standardsQuestion = document.getElementById('standardsQuestion');
    if (standardsQuestion.value.trim() !== '') {
      standardsQuestion.classList.remove('is-invalid');
    } else {
      standardsQuestion.classList.add('is-invalid');
    }
  });
  
  document.getElementById('commitmentsQuestion').addEventListener('input', function() {
    var commitmentsQuestion = document.getElementById('commitmentsQuestion');
    if (commitmentsQuestion.value.trim() !== '') {
      commitmentsQuestion.classList.remove('is-invalid');
    } else {
      commitmentsQuestion.classList.add('is-invalid');
    }
  });
  
  document.getElementById('performanceQuestion').addEventListener('input', function() {
    var performanceQuestion = document.getElementById('performanceQuestion');
    if (performanceQuestion.value.trim() !== '') {
      performanceQuestion.classList.remove('is-invalid');
    } else {
      performanceQuestion.classList.add('is-invalid');
    }
  });

  document.getElementById('sustainabilityCommitteeQuestion').addEventListener('change', function() {
    var committeeDetailsContainer = document.getElementById('committeeDetailsContainer');
    if (this.value === 'Yes') {
      committeeDetailsContainer.classList.remove('hidden');
    } else {
      committeeDetailsContainer.classList.add('hidden');
    }
  });

  document.getElementById('assessmentQuestion').addEventListener('change', function() {
    var agencyDetailsContainer = document.getElementById('agencyDetailsContainer');
    if (this.value === 'Yes') {
      agencyDetailsContainer.classList.remove('hidden');
    } else {
      agencyDetailsContainer.classList.add('hidden');
    }
  });