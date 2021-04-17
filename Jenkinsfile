pipeline {
     agent {
        node {
            label 'workspace'
            customWorkspace '/home/yiici'
        }
    }
    options { timestamps () }

    stages {
        stage('Example Build') {
            steps {
                sh 'php --version'        
            }
        }
    }
}
