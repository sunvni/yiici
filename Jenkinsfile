pipeline {
     agent {
        node {
            label 'workspace'
            customWorkspace '/home/yiici'
        }
    }
    options { timestamps () }
    stages {
        stage('Build') {
            steps {
                echo 'Building..'
            }
        }
        stage('Test') {
            steps {
                echo 'Testing..'
            }
        }
        stage('Deploy') {
            steps {
                echo 'Deploying....'
            }
        }
    }
}
